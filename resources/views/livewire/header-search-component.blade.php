<div class="relative ">
    <form action="{{route('product.search')}}" >
        <input id="searchInput" type="text" name="q" class="w-full rounded-md pl-2 pr-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search" value="{{$q}}">

        <div id="searchIcon" class="absolute inset-y-0 right-0 flex items-center pr-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 cursor-pointer">
            <path d="M21 21l-4.35-4.35"/>
            <circle cx="10" cy="10" r="7"/>
            </svg>
        </div>
    </form>
</div>

<!-- <script>
  const searchInput = document.getElementById('searchInput');
  const searchIcon = document.getElementById('searchIcon');

  searchIcon.addEventListener('click', function() {
    searchInput.classList.toggle('w-full');
  });
</script> -->

