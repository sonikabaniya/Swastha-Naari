@extends('layouts.app')

@section('content')
<div style="width:90%; margin:3% auto;">
<form action="{{ route('dataintakeroute') }}" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname">First Name </label>
      <input type="text" class="form-control" name="firstname" placeholder="नाम">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name </label>
      <input type="text" class="form-control" name="lastname" placeholder="थर">
    </div>
  </div>
  <div class="form-group">
    <label for="guardianname">Guardian Name </label>
    <input type="text" class="form-control" name="guardianname" placeholder="अभिभावकको नाम ">
  </div>
  <div class="form-group">
    <label for="weight">Weight </label>
    <input type="text" class="form-control" name="weight" placeholder="तौल">
  </div>
  <div class="form-group">
    <label for="bp">Blood Pressure</label>
    <input type="text" class="form-control" name="bp" placeholder="ब्लड प्रेस्सर ">
  </div>
  <div class="form-group">
    <label for="menopause">Menopause </label>
    <input type="text" class="form-control" name="menopause" placeholder="menopause">
  </div>
  <div class="form-group">
    <label for="history">History </label>
    <input type="text" class="form-control" name="history" placeholder="पहिला भएका समस्या ">
  </div>
  <div class="form-group">
    <label for="noofchildren">No Of Children</label>
    <input type="text" class="form-control" name="noofchildren" placeholder="बाल बच्चाको सन्न्ख्या ">
  </div>
  <div class="form-group">
    <label for="otherillness">Other illness </label>
    <input type="text" class="form-control" name="otherillness" placeholder="अरु बिरामीहरु ">
  </div>
  <div class="form-group">
    <label for="protectionused">Protection Used</label>
    <input type="text" class="form-control" name="protectionused" placeholder="परिवार नियोजनको साधन">
  </div>
  @csrf
  <button type="submit" class="btn btn-primary">रेकर्ड गर्नुस </button>
</form>
</div>
@endsection