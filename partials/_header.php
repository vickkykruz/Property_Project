<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/boxicons.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/nice-select.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/meanmenu.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/animate.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/fonts/flaticon.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/odometer.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/modal-video.min.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/style.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/responsive.css">

  <link rel="stylesheet" href="http://localhost/Property_Project/assets/css/theme-dark.css">
  <title>Blaze - Bridging Gaps in Logistics</title>
  <link rel="icon" type="image/png" href="http://localhost/Property_Project/assets/images/favicon.png">
  <style>
    /* Search */
    .s002 {
      /* min-height: 100vh; */
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: center;
      justify-content: center;
      -ms-flex-align: center;
      align-items: center;
      padding: 3px;
    }

    .s002 form {
      width: 100%;
      max-width: 1190px;
    }

    .s002 form legend {
      font-size: 60px;
      line-height: 1;
      color: #fff;
      margin-bottom: 60px;
      font-weight: 400;
      text-align: center;
    }

    .s002 form .inner-form {
      background: rgba(0, 0, 0, 0.5);
      padding: 10px;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -ms-flex-align: center;
      align-items: center;
    }

    .s002 form .inner-form .input-field {
      position: relative;
      border-right: 1px solid #ddd;
    }

    .s002 form .inner-form .input-field .icon-wrap {
      position: absolute;
      top: 0;
      left: 0;
      width: 40px;
      height: 100%;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: end;
      justify-content: flex-end;
      -ms-flex-align: center;
      align-items: center;
      z-index: 1;
    }

    .s002 form .inner-form .input-field .icon-wrap svg {
      fill: #555;
      width: 14px;
      height: 14px;
    }

    .s002 form .inner-form .input-field input {
      height: 70px;
      background: #fff;
      border-radius: 0;
      border: 0;
      display: block;
      width: 100%;
      padding: 10px 20px 10px 45px;
      font-size: 16px;
      color: #555;
      font-weight: 400;
      font-family: 'Poppins', sans-serif;
    }

    .s002 form .inner-form .input-field input.placeholder {
      color: #9a9a9a;
      font-size: 16px;
      font-weight: 400;
      text-transform: uppercase;
    }

    .s002 form .inner-form .input-field input:-moz-placeholder {
      color: #9a9a9a;
      font-size: 16px;
      font-weight: 400;
      text-transform: uppercase;
    }

    .s002 form .inner-form .input-field input::-webkit-input-placeholder {
      color: #9a9a9a;
      font-size: 16px;
      font-weight: 400;
      text-transform: uppercase;
    }

    .s002 form .inner-form .input-field input:hover,
    .s002 form .inner-form .input-field input:focus {
      box-shadow: none;
      outline: 0;
    }


    .s002 form .inner-form .input-field.first-wrap {
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .s002 form .inner-form .input-field.second-wrap {
      min-width: 190px;
      max-width: 190px;
    }

    .s002 form .inner-form .input-field.third-wrap {
      min-width: 190px;
      max-width: 190px;
    }

    .s002 form .inner-form .input-field.fouth-wrap {
      min-width: 190px;
      max-width: 190px;
      border-right: 0;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__inner {
      background: #fff;
      border-radius: 0;
      border: 0;
      height: 70px;
      color: #666;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding: 10px 32px 10px 45px;
      border-radius: 0;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__inner .choices__list.choices__list--single {
      display: -ms-flexbox;
      display: flex;
      padding: 0;
      -ms-flex-align: center;
      align-items: center;
      height: 100%;
      font-size: 16px;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__inner .choices__item.choices__item--selectable.choices__placeholder {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      height: 100%;
      opacity: 1;
      color: #9a9a9a;
      text-transform: uppercase;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__inner .choices__list--single .choices__item {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      height: 100%;
      color: #666;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices[data-type*="select-one"]:after {
      right: 30px;
      border-color: #e5e5e5 transparent transparent transparent;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__list.choices__list--dropdown {
      border: 0;
      background: #fff;
      padding: 10px 15px;
      border-radius: 0;
      box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__list.choices__list--dropdown .choices__item--selectable {
      padding-right: 0;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__list--dropdown .choices__item--selectable.is-highlighted {
      background: #fff;
      color: #b78a62;
    }

    .s002 form .inner-form .input-field.fouth-wrap .choices__list--dropdown .choices__item {
      color: #555;
      min-height: 24px;
      font-size: 16px;
    }

    .s002 form .inner-form .input-field.fifth-wrap {
      min-width: 190px;
      max-width: 190px;
      padding-left: 10px;
      border-right: 0;
    }

    .s002 form .inner-form .input-field.fifth-wrap .btn-search {
      height: 70px;
      width: 100%;
      background: #18253e;
      white-space: nowrap;
      border-radius: .5px;
      font-size: 20px;
      color: #fff;
      transition: all .2s ease-out, color .2s ease-out;
      border: 0;
      cursor: pointer;
      font-weight: 400;
      font-family: 'Poppins', sans-serif;
    }

    .s002 form .inner-form .input-field.fifth-wrap .btn-search:hover {
      background: #af7d51;
    }

    @media screen and (max-width: 992px) {
      .s002 form legend {
        font-size: 50px;
        text-align: center;
        margin-bottom: 50px;
      }

      .s002 form .inner-form {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-pack: justify;
        justify-content: space-between;
      }

      .s002 form .inner-form .input-field {
        margin-bottom: 15px;
      }

      .s002 form .inner-form .input-field.first-wrap {
        width: 100%;
      }

      .s002 form .inner-form .input-field.second-wrap {
        width: calc(50% - 7.5px);
        max-width: none;
      }

      .s002 form .inner-form .input-field.third-wrap {
        width: calc(50% - 7.5px);
        max-width: none;
      }

      .s002 form .inner-form .input-field.fouth-wrap {
        width: calc(50% - 7.5px);
        max-width: none;
        margin-bottom: 0;
      }

      .s002 form .inner-form .input-field.fifth-wrap {
        width: calc(50% - 7.5px);
        max-width: none;
        padding-left: 0;
        margin-bottom: 0;
      }
    }

    @media screen and (max-width: 767px) {
      .s002 form legend {
        font-size: 40px;
        margin-bottom: 40px;
      }

      .s002 form .inner-form .input-field.second-wrap,
      .s002 form .inner-form .input-field.third-wrap,
      .s002 form .inner-form .input-field.fouth-wrap,
      .s002 form .inner-form .input-field.fifth-wrap {
        width: 100%;
        margin-bottom: 15px;
      }

      .s002 form .inner-form .input-field.fifth-wrap {
        margin-bottom: 0;
      }
    }

    /** Choice **/
    .choices {
      position: relative;
      margin-bottom: 24px;
      font-size: 16px;
    }

    .choices:focus {
      outline: none;
    }

    .choices:last-child {
      margin-bottom: 0;
    }

    .choices.is-disabled .choices__inner,
    .choices.is-disabled .choices__input {
      background-color: #EAEAEA;
      cursor: not-allowed;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .choices.is-disabled .choices__item {
      cursor: not-allowed;
    }

    .choices[data-type*="select-one"] {
      cursor: pointer;
    }

    .choices[data-type*="select-one"] .choices__inner {
      padding-bottom: 7.5px;
    }

    .choices[data-type*="select-one"] .choices__input {
      display: block;
      width: 100%;
      padding: 10px;
      border-bottom: 1px solid #DDDDDD;
      background-color: #FFFFFF;
      margin: 0;
    }

    .choices[data-type*="select-one"] .choices__button {
      background-image: url("../../icons/cross-inverse.svg");
      padding: 0;
      background-size: 8px;
      height: 100%;
      position: absolute;
      top: 50%;
      right: 0;
      margin-top: -10px;
      margin-right: 25px;
      height: 20px;
      width: 20px;
      border-radius: 10em;
      opacity: .5;
    }

    .choices[data-type*="select-one"] .choices__button:hover,
    .choices[data-type*="select-one"] .choices__button:focus {
      opacity: 1;
    }

    .choices[data-type*="select-one"] .choices__button:focus {
      box-shadow: 0px 0px 0px 2px #00BCD4;
    }

    .choices[data-type*="select-one"]:after {
      content: "";
      height: 0;
      width: 0;
      border-style: solid;
      border-color: #333333 transparent transparent transparent;
      border-width: 5px;
      position: absolute;
      right: 11.5px;
      top: 50%;
      margin-top: -2.5px;
      pointer-events: none;
    }

    .choices[data-type*="select-one"].is-open:after {
      border-color: transparent transparent #333333 transparent;
      margin-top: -7.5px;
    }

    .choices[data-type*="select-one"][dir="rtl"]:after {
      left: 11.5px;
      right: auto;
    }

    .choices[data-type*="select-one"][dir="rtl"] .choices__button {
      right: auto;
      left: 0;
      margin-left: 25px;
      margin-right: 0;
    }

    .choices[data-type*="select-multiple"] .choices__inner,
    .choices[data-type*="text"] .choices__inner {
      cursor: text;
    }

    .choices[data-type*="select-multiple"] .choices__button,
    .choices[data-type*="text"] .choices__button {
      position: relative;
      display: inline-block;
      margin-top: 0;
      margin-right: -4px;
      margin-bottom: 0;
      margin-left: 8px;
      padding-left: 16px;
      border-left: 1px solid #008fa1;
      background-image: url("../../icons/cross.svg");
      background-size: 8px;
      width: 8px;
      line-height: 1;
      opacity: .75;
    }

    .choices[data-type*="select-multiple"] .choices__button:hover,
    .choices[data-type*="select-multiple"] .choices__button:focus,
    .choices[data-type*="text"] .choices__button:hover,
    .choices[data-type*="text"] .choices__button:focus {
      opacity: 1;
    }

    .choices__inner {
      display: inline-block;
      vertical-align: top;
      width: 100%;
      background-color: #f9f9f9;
      padding: 7.5px 7.5px 3.75px;
      border: 1px solid #DDDDDD;
      border-radius: 2.5px;
      font-size: 14px;
      min-height: 44px;
      overflow: hidden;
    }

    .is-focused .choices__inner,
    .is-open .choices__inner {
      border-color: #b7b7b7;
    }

    .is-open .choices__inner {
      border-radius: 2.5px 2.5px 0 0;
    }

    .is-flipped.is-open .choices__inner {
      border-radius: 0 0 2.5px 2.5px;
    }

    .choices__list {
      margin: 0;
      padding-left: 0;
      list-style: none;
    }

    .choices__list--single {
      display: inline-block;
      padding: 4px 16px 4px 4px;
      width: 100%;
    }

    [dir="rtl"] .choices__list--single {
      padding-right: 4px;
      padding-left: 16px;
    }

    .choices__list--single .choices__item {
      width: 100%;
    }

    .choices__list--multiple {
      display: inline;
    }

    .choices__list--multiple .choices__item {
      display: inline-block;
      vertical-align: middle;
      border-radius: 20px;
      padding: 4px 10px;
      font-size: 12px;
      font-weight: 500;
      margin-right: 3.75px;
      margin-bottom: 3.75px;
      background-color: #00BCD4;
      border: 1px solid #00a5bb;
      color: #FFFFFF;
      word-break: break-all;
    }

    .choices__list--multiple .choices__item[data-deletable] {
      padding-right: 5px;
    }

    [dir="rtl"] .choices__list--multiple .choices__item {
      margin-right: 0;
      margin-left: 3.75px;
    }

    .choices__list--multiple .choices__item.is-highlighted {
      background-color: #00a5bb;
      border: 1px solid #008fa1;
    }

    .is-disabled .choices__list--multiple .choices__item {
      background-color: #aaaaaa;
      border: 1px solid #919191;
    }

    .choices__list--dropdown {
      display: none;
      z-index: 1;
      position: absolute;
      width: 100%;
      background-color: #FFFFFF;
      border: 1px solid #DDDDDD;
      top: 100%;
      margin-top: -1px;
      border-bottom-left-radius: 2.5px;
      border-bottom-right-radius: 2.5px;
      overflow: hidden;
      word-break: break-all;
    }

    .choices__list--dropdown.is-active {
      display: block;
    }

    .is-open .choices__list--dropdown {
      border-color: #b7b7b7;
    }

    .is-flipped .choices__list--dropdown {
      top: auto;
      bottom: 100%;
      margin-top: 0;
      margin-bottom: -1px;
      border-radius: .25rem .25rem 0 0;
    }

    .choices__list--dropdown .choices__list {
      position: relative;
      max-height: 300px;
      overflow: auto;
      -webkit-overflow-scrolling: touch;
      will-change: scroll-position;
    }

    .choices__list--dropdown .choices__item {
      position: relative;
      padding: 10px;
      font-size: 14px;
    }

    [dir="rtl"] .choices__list--dropdown .choices__item {
      text-align: right;
    }


    @media (min-width: 640px) {
      .choices__list--dropdown .choices__item--selectable {
        padding-right: 100px;
      }

      .choices__list--dropdown .choices__item--selectable:after {
        content: attr(data-select-text);
        font-size: 12px;
        opacity: 0;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
      }

      [dir="rtl"] .choices__list--dropdown .choices__item--selectable {
        text-align: right;
        padding-left: 100px;
        padding-right: 10px;
      }

      [dir="rtl"] .choices__list--dropdown .choices__item--selectable:after {
        right: auto;
        left: 10px;
      }
    }

    .choices__list--dropdown .choices__item--selectable.is-highlighted {
      background-color: #f2f2f2;
    }

    .choices__list--dropdown .choices__item--selectable.is-highlighted:after {
      opacity: .5;
    }

    .choices__item {
      cursor: default;
    }

    .choices__item--selectable {
      cursor: pointer;
    }

    .choices__item--disabled {
      cursor: not-allowed;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      opacity: .5;
    }

    .choices__heading {
      font-weight: 600;
      font-size: 12px;
      padding: 10px;
      border-bottom: 1px solid #f7f7f7;
      color: gray;
    }

    .choices__button {
      text-indent: -9999px;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border: 0;
      background-color: transparent;
      background-repeat: no-repeat;
      background-position: center;
      cursor: pointer;
    }

    .choices__button:focus {
      outline: none;
    }

    .choices__input {
      display: inline-block;
      vertical-align: baseline;
      background-color: #f9f9f9;
      font-size: 14px;
      margin-bottom: 5px;
      border: 0;
      border-radius: 0;
      max-width: 100%;
      padding: 4px 0 4px 2px;
    }

    .choices__input:focus {
      outline: 0;
    }

    [dir="rtl"] .choices__input {
      padding-right: 2px;
      padding-left: 0;
    }

    .choices__placeholder {
      opacity: .5;
    }

    /*=====  End of Choices  ======*/

    .flatpickr-calendar {
      background: transparent;
      opacity: 0;
      display: none;
      text-align: center;
      visibility: hidden;
      padding: 0;
      animation: none;
      direction: ltr;
      border: 0;
      font-size: 14px;
      line-height: 24px;
      border-radius: 5px;
      position: absolute;
      width: 307.875px;
      box-sizing: border-box;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      background: #fff;
      box-shadow: 1px 0 0 #e6e6e6, -1px 0 0 #e6e6e6, 0 1px 0 #e6e6e6, 0 -1px 0 #e6e6e6, 0 3px 13px rgba(0, 0, 0, 0.08);
    }

    .flatpickr-calendar.open,
    .flatpickr-calendar.inline {
      opacity: 1;
      max-height: 640px;
      visibility: visible;
    }

    .flatpickr-calendar.open {
      display: inline-block;
      z-index: 99999;
    }

    .flatpickr-calendar.animate.open {
      animation: fpFadeInDown 300ms cubic-bezier(0.23, 1, 0.32, 1);
    }

    .flatpickr-calendar.inline {
      display: block;
      position: relative;
      top: 2px;
    }

    .flatpickr-calendar.static {
      position: absolute;
      top: calc(100% + 2px);
    }

    .flatpickr-calendar.static.open {
      z-index: 999;
      display: block;
    }

    .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7) {
      box-shadow: none !important;
    }

    .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1) {
      box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
    }

    .flatpickr-calendar .hasWeeks .dayContainer,
    .flatpickr-calendar .hasTime .dayContainer {
      border-bottom: 0;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .flatpickr-calendar .hasWeeks .dayContainer {
      border-left: 0;
    }

    .flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
      height: 40px;
      border-top: 1px solid #e6e6e6;
    }

    .flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
      height: auto;
    }

    .flatpickr-calendar:before,
    .flatpickr-calendar:after {
      position: absolute;
      display: block;
      pointer-events: none;
      border: solid transparent;
      content: '';
      height: 0;
      width: 0;
      left: 22px;
    }

    .flatpickr-calendar.rightMost:before,
    .flatpickr-calendar.rightMost:after {
      left: auto;
      right: 22px;
    }

    .flatpickr-calendar:before {
      border-width: 5px;
      margin: 0 -5px;
    }

    .flatpickr-calendar:after {
      border-width: 4px;
      margin: 0 -4px;
    }

    .flatpickr-calendar.arrowTop:before,
    .flatpickr-calendar.arrowTop:after {
      bottom: 100%;
    }

    .flatpickr-calendar.arrowTop:before {
      border-bottom-color: #e6e6e6;
    }

    .flatpickr-calendar.arrowTop:after {
      border-bottom-color: #fff;
    }

    .flatpickr-calendar.arrowBottom:before,
    .flatpickr-calendar.arrowBottom:after {
      top: 100%;
    }

    .flatpickr-calendar.arrowBottom:before {
      border-top-color: #e6e6e6;
    }

    .flatpickr-calendar.arrowBottom:after {
      border-top-color: #fff;
    }

    .flatpickr-calendar:focus {
      outline: 0;
    }

    .flatpickr-wrapper {
      position: relative;
      display: inline-block;
    }

    .flatpickr-months {
      display: -ms-flexbox;
      display: flex;
    }

    .flatpickr-months .flatpickr-month {
      background: transparent;
      color: rgba(0, 0, 0, 0.9);
      fill: rgba(0, 0, 0, 0.9);
      height: 28px;
      line-height: 1;
      text-align: center;
      position: relative;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      overflow: hidden;
      -ms-flex: 1;
      flex: 1;
    }

    .flatpickr-months .flatpickr-prev-month,
    .flatpickr-months .flatpickr-next-month {
      text-decoration: none;
      cursor: pointer;
      position: absolute;
      top: 0;
      line-height: 16px;
      height: 28px;
      padding: 10px;
      z-index: 3;
      color: rgba(0, 0, 0, 0.9);
      fill: rgba(0, 0, 0, 0.9);
    }

    .flatpickr-months .flatpickr-prev-month.disabled,
    .flatpickr-months .flatpickr-next-month.disabled {
      display: none;
    }

    .flatpickr-months .flatpickr-prev-month i,
    .flatpickr-months .flatpickr-next-month i {
      position: relative;
    }

    .flatpickr-months .flatpickr-prev-month.flatpickr-prev-month,
    .flatpickr-months .flatpickr-next-month.flatpickr-prev-month {
      /*
        /*rtl:begin:ignore*/
      left: 0;
      /*
        /*rtl:end:ignore*/
    }

    /*
        /*rtl:begin:ignore*/
    /*
        /*rtl:end:ignore*/
    .flatpickr-months .flatpickr-prev-month.flatpickr-next-month,
    .flatpickr-months .flatpickr-next-month.flatpickr-next-month {
      /*
        /*rtl:begin:ignore*/
      right: 0;
      /*
        /*rtl:end:ignore*/
    }

    /*
        /*rtl:begin:ignore*/
    /*
        /*rtl:end:ignore*/
    .flatpickr-months .flatpickr-prev-month:hover,
    .flatpickr-months .flatpickr-next-month:hover {
      color: #959ea9;
    }

    .flatpickr-months .flatpickr-prev-month:hover svg,
    .flatpickr-months .flatpickr-next-month:hover svg {
      fill: #f64747;
    }

    .flatpickr-months .flatpickr-prev-month svg,
    .flatpickr-months .flatpickr-next-month svg {
      width: 14px;
      height: 14px;
    }

    .flatpickr-months .flatpickr-prev-month svg path,
    .flatpickr-months .flatpickr-next-month svg path {
      transition: fill .1s;
      fill: inherit;
    }

    .numInputWrapper {
      position: relative;
      height: auto;
    }

    .numInputWrapper input,
    .numInputWrapper span {
      display: inline-block;
    }

    .numInputWrapper input {
      width: 100%;
    }

    .numInputWrapper input::-ms-clear {
      display: none;
    }

    .numInputWrapper span {
      position: absolute;
      right: 0;
      width: 14px;
      padding: 0 4px 0 2px;
      height: 50%;
      line-height: 50%;
      opacity: 0;
      cursor: pointer;
      border: 1px solid rgba(57, 57, 57, 0.15);
      box-sizing: border-box;
    }

    .numInputWrapper span:hover {
      background: rgba(0, 0, 0, 0.1);
    }

    .numInputWrapper span:active {
      background: rgba(0, 0, 0, 0.2);
    }

    .numInputWrapper span:after {
      display: block;
      content: "";
      position: absolute;
    }

    .numInputWrapper span.arrowUp {
      top: 0;
      border-bottom: 0;
    }

    .numInputWrapper span.arrowUp:after {
      border-left: 4px solid transparent;
      border-right: 4px solid transparent;
      border-bottom: 4px solid rgba(57, 57, 57, 0.6);
      top: 26%;
    }

    .numInputWrapper span.arrowDown {
      top: 50%;
    }

    .numInputWrapper span.arrowDown:after {
      border-left: 4px solid transparent;
      border-right: 4px solid transparent;
      border-top: 4px solid rgba(57, 57, 57, 0.6);
      top: 40%;
    }

    .numInputWrapper span svg {
      width: inherit;
      height: auto;
    }

    .numInputWrapper span svg path {
      fill: rgba(0, 0, 0, 0.5);
    }

    .numInputWrapper:hover {
      background: rgba(0, 0, 0, 0.05);
    }

    .numInputWrapper:hover span {
      opacity: 1;
    }

    .flatpickr-current-month {
      font-size: 135%;
      line-height: inherit;
      font-weight: 300;
      color: inherit;
      position: absolute;
      width: 75%;
      left: 12.5%;
      padding: 6.16px 0 0 0;
      line-height: 1;
      height: 28px;
      display: inline-block;
      text-align: center;
      transform: translate3d(0, 0, 0);
    }

    .flatpickr-current-month span.cur-month {
      font-family: inherit;
      font-weight: 700;
      color: inherit;
      display: inline-block;
      margin-left: .5ch;
      padding: 0;
    }

    .flatpickr-current-month span.cur-month:hover {
      background: rgba(0, 0, 0, 0.05);
    }

    .flatpickr-current-month .numInputWrapper {
      width: 6ch;
      width: 7ch\0;
      display: inline-block;
    }

    .flatpickr-current-month .numInputWrapper span.arrowUp:after {
      border-bottom-color: rgba(0, 0, 0, 0.9);
    }

    .flatpickr-current-month .numInputWrapper span.arrowDown:after {
      border-top-color: rgba(0, 0, 0, 0.9);
    }

    .flatpickr-current-month input.cur-year {
      background: transparent;
      box-sizing: border-box;
      color: inherit;
      cursor: text;
      padding: 0 0 0 .5ch;
      margin: 0;
      display: inline-block;
      font-size: inherit;
      font-family: inherit;
      font-weight: 300;
      line-height: inherit;
      height: auto;
      border: 0;
      border-radius: 0;
      vertical-align: initial;
    }

    .flatpickr-current-month input.cur-year:focus {
      outline: 0;
    }

    .flatpickr-current-month input.cur-year[disabled],
    .flatpickr-current-month input.cur-year[disabled]:hover {
      font-size: 100%;
      color: rgba(0, 0, 0, 0.5);
      background: transparent;
      pointer-events: none;
    }

    .flatpickr-weekdays {
      background: transparent;
      text-align: center;
      overflow: hidden;
      width: 100%;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      height: 28px;
    }

    .flatpickr-weekdays .flatpickr-weekdaycontainer {
      display: -ms-flexbox;
      display: flex;
      -ms-flex: 1;
      flex: 1;
    }

    span.flatpickr-weekday {
      cursor: default;
      font-size: 90%;
      background: transparent;
      color: rgba(0, 0, 0, 0.54);
      line-height: 1;
      margin: 0;
      text-align: center;
      display: block;
      -ms-flex: 1;
      flex: 1;
      font-weight: bolder;
    }

    .dayContainer,
    .flatpickr-weeks {
      padding: 1px 0 0 0;
    }

    .flatpickr-days {
      position: relative;
      overflow: hidden;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: start;
      align-items: flex-start;
      width: 307.875px;
    }

    .flatpickr-days:focus {
      outline: 0;
    }

    .dayContainer {
      padding: 0;
      outline: 0;
      text-align: left;
      width: 307.875px;
      min-width: 307.875px;
      max-width: 307.875px;
      box-sizing: border-box;
      display: inline-block;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      -ms-flex-pack: justify;
      justify-content: space-around;
      transform: translate3d(0, 0, 0);
      opacity: 1;
    }

    .dayContainer+.dayContainer {
      box-shadow: -1px 0 0 #e6e6e6;
    }

    .flatpickr-day {
      background: none;
      border: 1px solid transparent;
      border-radius: 150px;
      box-sizing: border-box;
      color: #393939;
      cursor: pointer;
      font-weight: 400;
      width: 14.2857143%;
      -ms-flex-preferred-size: 14.2857143%;
      flex-basis: 14.2857143%;
      max-width: 39px;
      height: 39px;
      line-height: 39px;
      margin: 0;
      display: inline-block;
      position: relative;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center;
    }

    .flatpickr-day.inRange,
    .flatpickr-day.prevMonthDay.inRange,
    .flatpickr-day.nextMonthDay.inRange,
    .flatpickr-day.today.inRange,
    .flatpickr-day.prevMonthDay.today.inRange,
    .flatpickr-day.nextMonthDay.today.inRange,
    .flatpickr-day:hover,
    .flatpickr-day.prevMonthDay:hover,
    .flatpickr-day.nextMonthDay:hover,
    .flatpickr-day:focus,
    .flatpickr-day.prevMonthDay:focus,
    .flatpickr-day.nextMonthDay:focus {
      cursor: pointer;
      outline: 0;
      background: #e6e6e6;
      border-color: #e6e6e6;
    }

    .flatpickr-day.today {
      border-color: #959ea9;
    }

    .flatpickr-day.today:hover,
    .flatpickr-day.today:focus {
      border-color: #959ea9;
      background: #959ea9;
      color: #fff;
    }

    .flatpickr-day.selected,
    .flatpickr-day.startRange,
    .flatpickr-day.endRange,
    .flatpickr-day.selected.inRange,
    .flatpickr-day.startRange.inRange,
    .flatpickr-day.endRange.inRange,
    .flatpickr-day.selected:focus,
    .flatpickr-day.startRange:focus,
    .flatpickr-day.endRange:focus,
    .flatpickr-day.selected:hover,
    .flatpickr-day.startRange:hover,
    .flatpickr-day.endRange:hover,
    .flatpickr-day.selected.prevMonthDay,
    .flatpickr-day.startRange.prevMonthDay,
    .flatpickr-day.endRange.prevMonthDay,
    .flatpickr-day.selected.nextMonthDay,
    .flatpickr-day.startRange.nextMonthDay,
    .flatpickr-day.endRange.nextMonthDay {
      background: #569ff7;
      box-shadow: none;
      color: #fff;
      border-color: #569ff7;
    }

    .flatpickr-day.selected.startRange,
    .flatpickr-day.startRange.startRange,
    .flatpickr-day.endRange.startRange {
      border-radius: 50px 0 0 50px;
    }

    .flatpickr-day.selected.endRange,
    .flatpickr-day.startRange.endRange,
    .flatpickr-day.endRange.endRange {
      border-radius: 0 50px 50px 0;
    }

    .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)) {
      box-shadow: -10px 0 0 #569ff7;
    }

    .flatpickr-day.selected.startRange.endRange,
    .flatpickr-day.startRange.startRange.endRange,
    .flatpickr-day.endRange.startRange.endRange {
      border-radius: 50px;
    }

    .flatpickr-day.inRange {
      border-radius: 0;
      box-shadow: -5px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
    }

    .flatpickr-day.disabled,
    .flatpickr-day.disabled:hover,
    .flatpickr-day.prevMonthDay,
    .flatpickr-day.nextMonthDay,
    .flatpickr-day.notAllowed,
    .flatpickr-day.notAllowed.prevMonthDay,
    .flatpickr-day.notAllowed.nextMonthDay {
      color: rgba(57, 57, 57, 0.3);
      background: transparent;
      border-color: transparent;
      cursor: default;
    }

    .flatpickr-day.disabled,
    .flatpickr-day.disabled:hover {
      cursor: not-allowed;
      color: rgba(57, 57, 57, 0.1);
    }

    .flatpickr-day.week.selected {
      border-radius: 0;
      box-shadow: -5px 0 0 #569ff7, 5px 0 0 #569ff7;
    }

    .flatpickr-day.hidden {
      visibility: hidden;
    }

    .rangeMode .flatpickr-day {
      margin-top: 1px;
    }

    .flatpickr-weekwrapper {
      display: inline-block;
      float: left;
    }

    .flatpickr-weekwrapper .flatpickr-weeks {
      padding: 0 12px;
      box-shadow: 1px 0 0 #e6e6e6;
    }

    .flatpickr-weekwrapper .flatpickr-weekday {
      float: none;
      width: 100%;
      line-height: 28px;
    }

    .flatpickr-weekwrapper span.flatpickr-day,
    .flatpickr-weekwrapper span.flatpickr-day:hover {
      display: block;
      width: 100%;
      max-width: none;
      color: rgba(57, 57, 57, 0.3);
      background: transparent;
      cursor: default;
      border: none;
    }

    .flatpickr-innerContainer {
      display: block;
      display: -ms-flexbox;
      display: flex;
      box-sizing: border-box;
      overflow: hidden;
    }

    .flatpickr-rContainer {
      display: inline-block;
      padding: 0;
      box-sizing: border-box;
    }

    .flatpickr-time {
      text-align: center;
      outline: 0;
      display: block;
      height: 0;
      line-height: 40px;
      max-height: 40px;
      box-sizing: border-box;
      overflow: hidden;
      display: -ms-flexbox;
      display: flex;
    }

    .flatpickr-time:after {
      content: "";
      display: table;
      clear: both;
    }

    .flatpickr-time .numInputWrapper {
      -ms-flex: 1;
      flex: 1;
      width: 40%;
      height: 40px;
      float: left;
    }

    .flatpickr-time .numInputWrapper span.arrowUp:after {
      border-bottom-color: #393939;
    }

    .flatpickr-time .numInputWrapper span.arrowDown:after {
      border-top-color: #393939;
    }

    .flatpickr-time.hasSeconds .numInputWrapper {
      width: 26%;
    }

    .flatpickr-time.time24hr .numInputWrapper {
      width: 49%;
    }

    .flatpickr-time input {
      background: transparent;
      box-shadow: none;
      border: 0;
      border-radius: 0;
      text-align: center;
      margin: 0;
      padding: 0;
      height: inherit;
      line-height: inherit;
      color: #393939;
      font-size: 14px;
      position: relative;
      box-sizing: border-box;
    }

    .flatpickr-time input.flatpickr-hour {
      font-weight: bold;
    }

    .flatpickr-time input.flatpickr-minute,
    .flatpickr-time input.flatpickr-second {
      font-weight: 400;
    }

    .flatpickr-time input:focus {
      outline: 0;
      border: 0;
    }

    .flatpickr-time .flatpickr-time-separator,
    .flatpickr-time .flatpickr-am-pm {
      height: inherit;
      display: inline-block;
      float: left;
      line-height: inherit;
      color: #393939;
      font-weight: bold;
      width: 2%;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    .flatpickr-time .flatpickr-am-pm {
      outline: 0;
      width: 18%;
      cursor: pointer;
      text-align: center;
      font-weight: 400;
    }

    .flatpickr-time input:hover,
    .flatpickr-time .flatpickr-am-pm:hover,
    .flatpickr-time input:focus,
    .flatpickr-time .flatpickr-am-pm:focus {
      background: #f3f3f3;
    }

    .flatpickr-input[readonly] {
      cursor: pointer;
    }

    @keyframes fpFadeInDown {
      from {
        opacity: 0;
        transform: translate3d(0, -20px, 0);
      }

      to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
      }
    }
  </style>
</head>

<body>
  <div class="loader">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="spinner"></div>
      </div>
    </div>
  </div>

  <div class="header-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6 col-lg-6">
          <div class="left">
            <ul>
              <li>
                <a href="index.html#" target="_blank">
                  <i class="bx bxl-facebook"></i>
                </a>
              </li>
              <li>
                <a href="index.html#" target="_blank">
                  <i class="bx bxl-twitter"></i>
                </a>
              </li>
              <li>
                <a href="index.html#" target="_blank">
                  <i class="bx bxl-instagram"></i>
                </a>
              </li>
              <li>
                <a href="index.html#" target="_blank">
                  <i class="bx bxl-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6">
          <div class="right">
            <ul>
              <li>
                <a href="services.html">Services</a>
              </li>
              <li>
                <a href="index.html#">Solution Center</a>
              </li>
              <li>
                <select>
                  <option>English</option>
                  <option>العربيّة</option>
                  <option>Deutsch</option>
                  <option>Português</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="nav-top-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-2 col-lg-2">
          <div class="left">
            <a href="index.html">
              <img src="http://localhost/Property_Project/assets/images/logo.png" class="logo-one" alt="Logo">
              <img src="http://localhost/Property_Project/assets/images/logo-two.png" class="logo-two" alt="Logo">
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-lg-10">
          <div class="right">
            <ul>
              <li>
                <div class="inner">
                  <i class="bx bx-mail-send"></i>
                  <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#8fe7eae3e3e0cffce1e6e9fbf6a1ece0e2"><span class="__cf_email__" data-cfemail="fe969b929291be8d9097988a87d09d9193">[email&#160;protected]</span></a>
                  <span>Drop us a line</span>
                </div>
              </li>
              <li>
                <div class="inner">
                  <i class="bx bx-phone-call"></i>
                  <a href="tel:+0123654987">+0123-654-987</a>
                  <span>Make a call</span>
                </div>
              </li>
              <li>
                <a class="common-btn" href="#">
                  Get Started
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>