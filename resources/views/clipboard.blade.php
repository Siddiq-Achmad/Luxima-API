@extends('layouts.master')
@section('title')
    Clipboard
@endsection
@section('content')
    <x-breadcrumb title="Clipboard" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Copy from input</h2>
                <div class="flex flex-col gap-4">
                    <input type="text" x-ref="inputField1" class="form-input" value="Hello, world!">
                    <div class="flex flex-wrap gap-4">
                        <button x-on:click="copyToClipboard('inputField1')"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Copy</button>
                        <button x-on:click="cutToClipboard('inputField1')"
                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85]">Cut</button>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Copy form Textarea</h2>
                <div class="flex flex-col gap-4">
                    <textarea type="text" x-ref="inputField2" class="h-auto form-textarea" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</textarea>
                    <div class="flex flex-wrap gap-4">
                        <button x-on:click="copyToClipboard('inputField2')"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Copy</button>
                        <button x-on:click="cutToClipboard('inputField2')"
                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85]">Cut</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <script>
        function copyToClipboard(inputFieldName) {
            const inputField = document.querySelector(`[x-ref="${inputFieldName}"]`);
            inputField.select();
            navigator.clipboard.writeText(inputField.value).then(() => {
                console.log(`Text from ${inputFieldName} copied to clipboard`);
            }).catch((error) => {
                console.error(`Could not copy text from ${inputFieldName}: `, error);
            });
        }

        function cutToClipboard(inputFieldName) {
            const inputField = document.querySelector(`[x-ref="${inputFieldName}"]`);
            inputField.select();
            navigator.clipboard.writeText(inputField.value).then(() => {
                inputField.value = '';
                console.log(`Text from ${inputFieldName} cut to clipboard`);
            }).catch((error) => {
                console.error(`Could not cut text from ${inputFieldName}: `, error);
            });
        }
    </script>
@endsection
