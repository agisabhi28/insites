<!DOCTYPE html>
<html>
  <head>
    <title>Isi Data Absract</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h2 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484;
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/3f0d2969f2cffeb123ab1a6fa7408bf87bd34bd3.jpeg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=checkbox]  {
      display: none;
      }
      label.check {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.check:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #095484;
      }
      input[type=checkbox]:checked + .check:before {
      background: #095484;
      }
      label.check:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 4px;
      width: 8px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Training Application Form</h1>
        </div>
        <h2>Applicant Details</h2>
        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="name" placeholder="First"/>
            <input type="text" name="name" placeholder="Last"/>
          </div>
        </div>
        <div class="item">
          <p>Phone</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Fax</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Company name</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Address</p>
          <input type="text" name="name" placeholder="Street address" />
          <input type="text" name="name" placeholder="Street address line 2" />
          <div class="city-item">
            <input type="text" name="name" placeholder="City" />
            <input type="text" name="name" placeholder="Region" />
            <input type="text" name="name" placeholder="Postal / Zip code" />
            <select>
              <option value="">Country</option>
              <option value="1">Russia</option>
              <option value="2">Germany</option>
              <option value="3">France</option>
              <option value="4">Armenia</option>
              <option value="5">USA</option>
            </select>
          </div>
        </div>
        <h2>Course Details</h2>
        <div class="item">
          <p>Course Code</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Location</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Start Date</p>
          <input type="date" name="bdate"/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <h2>Distributor Details</h2>
        <div class="item">
          <p>Contact Name</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Distributor Name</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Distributor Address</p>
          <input type="text" name="name" placeholder="Street address" />
          <input type="text" name="name" placeholder="Street address line 2" />
          <div class="city-item">
            <input type="text" name="name" placeholder="City" />
            <input type="text" name="name" placeholder="Region" />
            <input type="text" name="name" placeholder="Postal / Zip code" />
            <select>
              <option value="">Country</option>
              <option value="1">Russia</option>
              <option value="2">Germany</option>
              <option value="3">France</option>
              <option value="4">Armenia</option>
              <option value="5">USA</option>
            </select>
          </div>
        </div>
        <div class="item">
          <p>Phone</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Fax</p>
          <input type="text" name="name"/>
        </div>
        <div class="question">
          <p>Privacy Policy<span class="required">*</span></p>
          <div class="question-answer checkbox-item">
            <div>
              <input type="checkbox" value="none" id="check_1" name="check" required/>
              <label for="check_1" class="check"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">privacy policy.</a></span></label>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Send</button>
        </div>
      </form>
    </div>
  </body>
</html>
