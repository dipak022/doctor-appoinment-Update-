
@php
$slidder=DB::table('slidder')
        ->orderBy('id','DESC')->limit(1)->get();
        
@endphp
<section id="home" >
          <div class="row">
               @foreach($slidder as $row)
               <img style="width: 100%; height:600px;" src="{{ asset($row->image) }}" alt="">
                   
                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        
                                   </div>
                              </div>
                         </div>
                         @endforeach

                         

                    </div>
                   

          </div>
     </section>

