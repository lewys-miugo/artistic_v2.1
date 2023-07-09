<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <!-- Add your FAQ page content here -->
    <div class="container mx-4 md:mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Frequently Asked Questions</h1>
        <div class="space-y-4">
            <!-- <div class="border rounded p-4">
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
            </div> -->

            @foreach($faqs as $faq)
                <div>
                    <div class="border w-11/12 rounded p-4 flex items-center justify-between cursor-pointer toggle-answer">
                        <h2 class="text-xl font-semibold ">{{$faq->question}}</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>
                    </div>
                    <p class="mt-2 hidden ml-2 mx-4 md:pr-8 ">{{$faq->answer}}</p>

                </div>
            @endforeach
            <!-- Add more FAQ items as needed -->

        </div>
    </div>

    <!-- <div class="container mx-auto py-8">
        <div class="max-w-lg mx-auto">
            <button onclick="toggleCanvas()" class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none mb-4">Option 1</button>
            <div id="canvas-prices" class="bg-gray-200 p-4 hidden">
                <h2 class="text-lg font-semibold mb-2">Option 1 Content</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <button onclick="toggleFrame()" class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none mb-4">Option 2</button>
            <div id="frame-prices" class="bg-gray-200 p-4 hidden">
                <h2 class="text-lg font-semibold mb-2">Option 2 Content</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div> -->

    <script>
    function toggleCanvas() {
        const content1 = document.getElementById('canvas-prices');
        content1.classList.toggle('hidden');
    }

    function toggleFrame() {
        const content2 = document.getElementById('frame-prices');
        content2.classList.toggle('hidden');
    }
    </script>

    
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
