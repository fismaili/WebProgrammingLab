<x-layout>
  <ul>
   @foreach($jobs as $job)
  <li>{{$job['title']}}</li>
  <li>{{$job['description']}}</li>
  @endforeach
  </ul>
</x-layout>