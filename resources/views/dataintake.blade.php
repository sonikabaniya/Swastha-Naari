@extends('layouts.app')

@section('content')
<div style="width:90%; margin:3% auto;">
<form action="{{ route('dataintakeroute') }}" method="POST">
  <div class="form-row">

    <div class="form-group col-md-6">
        <label for="firstname">First Name </label>
        <input type="text" class="form-control" name="firstname" placeholder="नाम">
            @if($errors->has('firstname'))
              <div class="error">{{ $errors->first('firstname') }}</div>
            @endif
    </div>

    <div class="form-group col-md-6">
      <label for="lastname">Last Name </label>
      <input type="text" class="form-control" name="lastname" placeholder="थर">
          @if($errors->has('lastname'))
            <div class="error">{{ $errors->first('lastname') }}</div>
          @endif
    </div>
  </div>

  <div class="form-group">
    <label for="guardianname">Guardian Name </label>
    <input type="text" class="form-control" name="guardianname" placeholder="अभिभावकको नाम ">
          @if($errors->has('guardianname'))
            <div class="error">{{ $errors->first('guardianname') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="weight">Weight </label>
    <input type="text" class="form-control" name="weight" placeholder="तौल">
          @if($errors->has('weight'))
            <div class="error">{{ $errors->first('weight') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="bp">Blood Pressure</label>
    <input type="text" class="form-control" name="bp" placeholder="ब्लड प्रेस्सर ">
          @if($errors->has('bp'))
            <div class="error">{{ $errors->first('bp') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="menopause">Menopause </label>
    <input type="text" class="form-control" name="menopause" placeholder="menopause">
          @if($errors->has('menopause'))
            <div class="error">{{ $errors->first('menopause') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="history">History </label>
    <input type="text" class="form-control" name="history" placeholder="पहिला भएका समस्या ">
          @if($errors->has('history'))
            <div class="error">{{ $errors->first('history') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="noofchildren">No Of Children</label>
    <input type="text" class="form-control" name="noofchildren" placeholder="बाल बच्चाको सन्न्ख्या ">
          @if($errors->has('noofchildren'))
            <div class="error">{{ $errors->first('noofchildren') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="otherillness">Other illness </label>
    <input type="text" class="form-control" name="otherillness" placeholder="अरु बिरामीहरु ">
          @if($errors->has('otherillness'))
            <div class="error">{{ $errors->first('otherillness') }}</div>
          @endif
  </div>

  <div class="form-group">
    <label for="protectionused">Protection Used</label>
    <input type="text" class="form-control" name="protectionused" placeholder="परिवार नियोजनको साधन">
        @if($errors->has('protectionused'))
          <div class="error">{{ $errors->first('protectionused') }}</div>
        @endif

  </div>

  @csrf
  <button type="submit" class="btn btn-primary">रेकर्ड गर्नुस </button>
</form>
</div>
@endsection