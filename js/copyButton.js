// copyButtonScript.js
document.addEventListener('DOMContentLoaded', function () {
    var clipboard = new ClipboardJS('.copy-button');

    clipboard.on('success', function (e) {
        e.clearSelection();
        console.log('Code copied to clipboard');
    });

    clipboard.on('error', function (e) {
        console.error('Failed to copy code to clipboard');
    });
});
