<form action="{{route ('annonce.search')}}">

 <input type="text"  name="q" class="searchTerm" placeholder="What are you looking for?" value="{{ request()->q ?? ''}}">
<button type="submit" class="searchButton"><i class="fa fa-search"></i>search</button>
</form>