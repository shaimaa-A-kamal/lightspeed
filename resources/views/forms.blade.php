<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{url('assets/css/all.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
  <title>Document</title>
</head>

<body>

  <form class="text-center m-auto pt-4">
    <div class="border border-1 w-25 py-3 m-auto ">
      <div class="form-group">
        <label for="DRS">DRS</label>
        <input type="text" name="drs" id="DRS">
      </div>
      <div class="form-group">
        <label for="Account">Account</label>
        <select name="account" id="Account">
          <option> Select Customer</option>
          <option> </option>
          <option> </option>
          <option> </option>
          <option> </option>
        </select>
      </div>
      <div class="form-group">
        <label for="courier"> Courier </label>
        <select name="courier" id="courier">
          <option>Select Courier</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>

    <div class="form-check border border-1 w-25 m-auto mb-4">
      <input class="form-check-input" type="checkbox" value="" id="bill" required>
      <label class="form-check-label" for="bill">
        Bill date
      </label>
    </div>
    <div class="form-group w-25 m-auto mb-4 ">
      <label for="Org">Org</label>
      <select name="org" id="Org">
        <option> Select Dest</option>
        <option> </option>
        <option> </option>
        <option> </option>
        <option> </option>
      </select>
    </div>
    <div class="form-group w-25 m-auto mb-4">
      <label for="Dest">Dest</label>
      <select name="dest" id="Dest">
        <option> Select Dest</option>
        <option> </option>
        <option> </option>
        <option> </option>
        <option> </option>
      </select>
    </div>
    <div class="form-group w-25 m-auto mb-4">
      <label for="Location"> Location </label>
      <select name="location" id="Location">
        <option>Select Location</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group w-25 m-auto mb-4">
      <label for="fromNo">From No</label>
      <input type="number" name="fromNo" id="fromNo">
    </div>
    <div class="form-group">
      <label for="toNo">To No</label>
      <input type="number" name="drs" id="toNo">
    </div>

    <div class="form-group">
      <label for="Ref">Ref</label>
      <input type="text" name="ref" id="Ref">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="FullName" id="name">
    </div>
    <div class="form-group">
      <label for="Tel">Tel</label>
      <input type="tel" name="tel" id="Tel">
    </div>
    <div class="form-group">
      <label for="uploadNo">upload No</label>
      <input type="text" name="uploadNo" id="uploadNo">

    </div>
    <div class="form-group">
      <textarea name="awbs" id="" rows="3">
         AWBS
            </textarea>
    </div>

    <div class="form-group border border-1 w-25 m-auto mb-4">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="non" required>
        <label class="form-check-label" for="non">
          Non
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="underCollection" required>
        <label class="form-check-label" for="underCollection">
          Under Collection
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="fromReciver" required>
        <label class="form-check-label" for="fromReciver">
          Collected From Reciver
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="fromCourier" required>
        <label class="form-check-label" for="fromCourier">
          Collected From Courier
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="fromOffice" required>
        <label class="form-check-label" for="fromOffice">
          Collected From Office
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="toCustomer" required>
        <label class="form-check-label" for="toCustomer">
          Paid To Customet
        </label>
      </div>

    </div>
    <div class="form-group border border-1 w-25 m-auto mt-4 overflow-scroll">
      <div class="form-check ">
        <input class="form-check-input" type="checkbox" value="" id="non" required>
        <label class="form-check-label" for="non">
          Non
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="excel" required>
        <label class="form-check-label" for="excel">
          Excel Data
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="Received" required>
        <label class="form-check-label" for="Received">
          Import Received -ORIG
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="outForDelievery" required>
        <label class="form-check-label" for="outForDelievery">
          Oit For Delivery
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id=" Delivered" required>
        <label class="form-check-label" for="Delivered">
          Delivered
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="officeHold" required>
        <label class="form-check-label" for="officeHold">
          Office Hold
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="Forwarded" required>
        <label class="form-check-label" for="Forwarded">
          Forwarded To Call Center
        </label>
      </div>

    </div>


    <div>

      <div class="form-check border border-1 w-25 m-auto">
        <input class="form-check-input" type="checkbox" value="" id="excel" required>
        <label class="form-check-label" for="excel">
          Last Change Date
        </label>
      </div>

      <div class="form-check border border-1 w-25 m-auto">
        <input class="form-check-input" type="checkbox" value="" id="excel" required>
        <label class="form-check-label" for="excel">
          DRS Date
        </label>
      </div>
    </div>
  </form>



  <script src="{{url('assets/js/bootstrap.bundle.js')}}"></script>
  <script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>
