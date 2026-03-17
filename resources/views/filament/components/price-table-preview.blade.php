<div class="mt-4 border rounded-lg p-4 bg-gray-50">
    <div id="table-preview-{{ $language }}" class="overflow-x-auto">
        <p class="text-gray-500 text-sm italic">Table preview akan muncul di sini...</p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const language = '{{ $language }}';
    const textareaSelector = 'textarea[name="content_' + language + '"]';
    const textarea = document.querySelector(textareaSelector);
    const previewContainer = document.getElementById('table-preview-' + language);

    function updatePreview() {
        if (!textarea) return;
        
        const text = textarea.value.trim();
        if (!text) {
            previewContainer.innerHTML = '<p class="text-gray-500 text-sm italic">Table preview akan muncul di sini...</p>';
            return;
        }

        const lines = text.split('\n').map(l => l.trim()).filter(l => l);
        if (lines.length === 0) {
            previewContainer.innerHTML = '<p class="text-gray-500 text-sm italic">Table preview akan muncul di sini...</p>';
            return;
        }

        let html = '<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin: 10px 0;">';
        
        lines.forEach((line, index) => {
            const cells = line.split('|').map(c => c.trim());
            
            if (index === 0) {
                // Header row
                html += '<tr style="background-color: #333; color: white;">';
                cells.forEach(cell => {
                    html += '<th style="border: 1px solid #dddddd; text-align: left; padding: 8px; font-weight: bold;">' + escapeHtml(cell) + '</th>';
                });
                html += '</tr>';
            } else {
                // Data rows
                const bgColor = (index % 2 === 0) ? '#F9F9F9' : 'white';
                html += '<tr style="background-color: ' + bgColor + ';">';
                cells.forEach(cell => {
                    html += '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' + escapeHtml(cell) + '</td>';
                });
                html += '</tr>';
            }
        });
        
        html += '</table>';
        previewContainer.innerHTML = html;
    }

    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, m => map[m]);
    }

    if (textarea) {
        textarea.addEventListener('input', updatePreview);
        textarea.addEventListener('change', updatePreview);
        // Initial preview
        setTimeout(updatePreview, 300);
    }
});
</script>

