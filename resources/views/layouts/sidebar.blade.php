<div>
  <ul>
    @foreach($archives as $stat)
      <li>
      <a href="/?month={{$stat['month']}}&year={{$stat['year']}}" >
          {{$stat['month'].' '.$stat['year']}}
        </a>
      </li>
    @endforeach
  </ul>
</div>