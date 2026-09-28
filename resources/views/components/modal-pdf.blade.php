<div id="pdfModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md flex items-center justify-center p-4">
    <div class="bg-stone-900 border border-gray-700 w-full max-w-4xl rounded-2xl overflow-hidden flex flex-col h-[85vh] shadow-2xl">
        <div class="p-4 bg-stone-950 flex justify-between items-center border-b border-gray-800">
            <h3 id="modalTitle" class="font-serif-y2k text-amber-100 font-bold text-lg">Preview Document</h3>
            <button onclick="closePdfModal()" class="text-gray-400 hover:text-white font-bold text-2xl px-2">&times;</button>
        </div>
        <div class="flex-grow bg-stone-800">
            <iframe id="pdfIframe" src="" class="w-full h-full border-none"></iframe>
        </div>
    </div>
</div>

<script>
    function openPdfModal(pdfUrl, title) {
        document.getElementById('pdfIframe').src = pdfUrl;
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('pdfModal').classList.remove('hidden');
    }
    function closePdfModal() {
        document.getElementById('pdfModal').classList.add('hidden');
        document.getElementById('pdfIframe').src = '';
    }
</script>