@extends('templates.main')

@section('content')

  <div class="row justify-content-center ">
    <div class="col col-md-8">

      <div class="contactIndex-header  mb-5">
        <div style='font-size: 4rem'>Контакты</div>
        <div class="">{{$valueContact}} контакта(-ов)</div>
      </div>
      <a href="{{route('contact.create')}}"style='position: fixed; right: 400px; bottom: 50px;'class="add-contact">
        <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" id="Layer_1" height="65.00" width="65.00" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1_1_"><path d="M494,256c0,131.4-106.6,238-238,238S18,387.4,18,256S124.6,18,256,18S494,124.6,494,256z" fill="#4DB6AC"/></g><g id="Layer_2"><g><line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="16" x1="256" x2="256" y1="146" y2="374"/><line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="16" x1="150.5" x2="361.5" y1="260" y2="260"/></g></g></svg>
      </a>

      @foreach($dataPersons as $thisPerson)
        <div class="d-flex align-items-center mb-3">
          <div style="width: 70px; height: 70px;" class="image-contact bg-white rounded-circle d-inline-block border border-3 ms-4">
            <?xml version="1.0" ?><svg data-name="Layer 2" height="65.00" id="Layer_2" viewBox="-1 3 100.66 100.66" width="65.00" xmlns="http://www.w3.org/2000/svg"><title/><circle cx="50" cy="55.25" r="9"/><path d="M80.31,31.35H67.76l-.84-4.14A9,9,0,0,0,58.1,20H43.74A9,9,0,0,0,35,26.92l-1.05,4.43H24.49a5.77,5.77,0,0,1,.74,2.07,6,6,0,0,1,0,11.86,6,6,0,0,1-11.85,0,5.64,5.64,0,0,1-2.07-.74V71.35a9,9,0,0,0,9,9h60a9,9,0,0,0,9-9v-31A9,9,0,0,0,80.31,31.35ZM50,70.25a15,15,0,1,1,15-15A15,15,0,0,1,50,70.25Zm29-26H70a3,3,0,0,1,0-6h9a3,3,0,0,1,0,6Z"/><path d="M24.31,36.35h-2v-2a3,3,0,0,0-6,0v2h-2a3,3,0,0,0,0,6h2v2a3,3,0,0,0,6,0v-2h2a3,3,0,0,0,0-6Z"/></svg>
          </div>
          <div class="name-contact d-inline-block ms-3 fs-5"><a href="{{route('contact.show', $thisPerson->id)}}">{{$thisPerson->name}} {{$thisPerson->surname}} {{$thisPerson->patronymic}}</a></div> 
        </div>        
      @endforeach
@endsection