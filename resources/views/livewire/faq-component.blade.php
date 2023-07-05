<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <!-- Add your FAQ page content here -->
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Frequently Asked Questions</h1>
        <div class="space-y-4">
            <div class="border rounded p-4">
                <h2 class="text-xl font-semibold cursor-pointer toggle-answer">Question 1?</h2>
                <p class="mt-2 hidden">Answer to question 1.</p>
            </div>
            <div class="border rounded p-4">
                <div class="text-xl font-semibold cursor-pointer toggle-answer flex flex-row">
                    <div>
                        <h3>Question 2?</h3>
                    </div>
                    <div class="grid  content-right justify-end text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>
                    </div>
                </div>
                <p class="mt-2 hidden">Answer to question 2.</p>
            </div>

            <div>
            <div class="border rounded p-4 flex items-center justify-between cursor-pointer toggle-answer">
                <h2 class="text-xl font-semibold ">Question 3?</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                </svg>
            </div>
                <p class="mt-2 hidden">Answer to question 3.</p>

            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
    <script>
        const toggleAnswerElements = document.querySelectorAll('.toggle-answer');
        toggleAnswerElements.forEach((element) => {
            element.addEventListener('click', () => {
                const answerElement = element.nextElementSibling;
                answerElement.classList.toggle('hidden');
            });
        });
    </script>
</div>
