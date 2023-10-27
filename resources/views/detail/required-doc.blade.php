<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assess/css/detail.js')}}"></script>
  </head>


  <frameset rows="90%" cols="*,1600">
   <frame src="{{ route('user.required_list', ['id' => $req_doc->user_id])}}" id="pf1" name="pf1">
   <frame src="{{ route('user.required_first', ['id' => $req_doc->user_id])}}" id="pf2" name="pf2">
  </frameset>


</html>