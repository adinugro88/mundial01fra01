<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceContent extends Model
{
    protected $fillable = ['section_key', 'content'];
    
    protected $casts = [
        'content' => 'array',
    ];

    /**
     * Parse simple text format to HTML table
     * Format: Each line with columns separated by |
     * First line is header, rest are data rows
     */
    public static function parseTextToHtml(string $text): string
    {
        $lines = array_filter(array_map('trim', explode("\n", $text)));
        
        if (empty($lines)) {
            return '';
        }

        $html = '<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">';
        
        foreach ($lines as $index => $line) {
            $cells = array_map('trim', explode('|', $line));
            
            if ($index === 0) {
                // Header row
                $html .= '<tr>';
                foreach ($cells as $cell) {
                    $html .= '<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . htmlspecialchars($cell) . '</th>';
                }
                $html .= '</tr>';
            } else {
                // Data rows with alternating background
                $bgColor = ($index % 2 === 0) ? ' style="background-color: #F9F9F9;"' : '';
                $html .= '<tr' . $bgColor . '>';
                foreach ($cells as $cell) {
                    $html .= '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . htmlspecialchars($cell) . '</td>';
                }
                $html .= '</tr>';
            }
        }
        
        $html .= '</table>';
        return $html;
    }

    /**
     * Convert HTML table back to text format for editing
     */
    public static function htmlToText(string $html): string
    {
        $text = [];
        
        if (preg_match_all('/<tr[^>]*>(.*?)<\/tr>/is', $html, $trMatches)) {
            foreach ($trMatches[1] as $trContent) {
                $cells = [];
                
                // Get th or td elements
                if (preg_match_all('/<t[hd][^>]*>(.*?)<\/t[hd]>/is', $trContent, $cellMatches)) {
                    foreach ($cellMatches[1] as $cell) {
                        $cells[] = trim(strip_tags($cell));
                    }
                    
                    if (!empty($cells)) {
                        $text[] = implode(' | ', $cells);
                    }
                }
            }
        }
        
        return implode("\n", $text);
    }

    public static function getBySection($sectionKey, $language = null)
    {
        $lang = $language ?? session('language') ?? config('app.locale', 'id');
        
        $priceContent = self::where('section_key', $sectionKey)->first();
        
        if (!$priceContent) {
            return null;
        }
        
        return $priceContent->content[$lang] ?? $priceContent->content['fr'] ?? null;
    }
}
