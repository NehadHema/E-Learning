
@if (session()->has('message_sent'))
    <div class="alert alert-success" role="alert">
        {{session()->get('message_sent')}}
    </div>
@endif
 <form class="form-contact contact_form" action="{{route("send.email")}}" method="post" id="contactForm" novalidate="novalidate">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          
            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
        </div>
      </div>
    </div>
    <div class="form-group mt-3">
      <button type="submit" class="button button-contactForm btn_1">{{trans('messages.Send Message')}}</button>
    </div>
  </form>