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
        /*===============================
=            Choices            =
===============================*/
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

.choices.is-disabled .choices__inner, .choices.is-disabled .choices__input {
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

.choices[data-type*="select-one"] .choices__button:hover, .choices[data-type*="select-one"] .choices__button:focus {
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

.choices[data-type*="select-multiple"] .choices__inner, .choices[data-type*="text"] .choices__inner {
  cursor: text;
}

.choices[data-type*="select-multiple"] .choices__button, .choices[data-type*="text"] .choices__button {
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

.choices[data-type*="select-multiple"] .choices__button:hover, .choices[data-type*="select-multiple"] .choices__button:focus, .choices[data-type*="text"] .choices__button:hover, .choices[data-type*="text"] .choices__button:focus {
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

.is-focused .choices__inner, .is-open .choices__inner {
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
        .s003 {
            /*min-height: 100vh; */
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
            /* background-color: #a598ee;
  background-size: cover;
  background-position: center center; 
  padding: 15px; */
        }

        .s003 form {
            width: 100%;
            max-width: 790px;
            margin-bottom: 0;
        }

        .s003 form .inner-form {
            background: #fff;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            border-radius: 3px;
        }

        /* .s003 form .inner-form .input-field {
  height: 68px;
} */

        .s003 form .inner-form .input-field input {
            /* height: 100%; */
            background: transparent;
            border: 0;
            display: block;
            width: 100%;
            padding: 10px 32px;
            font-size: 16px;
            color: #555;
        }

        .s003 form .inner-form .input-field input.placeholder {
            color: #888;
            font-size: 16px;
        }

        .s003 form .inner-form .input-field input:-moz-placeholder {
            color: #888;
            font-size: 16px;
        }

        .s003 form .inner-form .input-field input::-webkit-input-placeholder {
            color: #888;
            font-size: 16px;
        }

        .s003 form .inner-form .input-field input:hover,
        .s003 form .inner-form .input-field input:focus {
            box-shadow: none;
            outline: 0;
            border-color: #fff;
        }

        .s003 form .inner-form .input-field.first-wrap {
            width: 100px;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner {
            background: transparent;
            border-radius: 0;
            border: 0;
            height: 100%;
            color: #fff;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px 30px;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list.choices__list--single {
            display: -ms-flexbox;
            display: flex;
            padding: 0;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner .choices__item.choices__item--selectable.choices__placeholder {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            opacity: 1;
            color: #888;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list--single .choices__item {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            color: #555;
        }

        .s003 form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after {
            right: 30px;
            border-color: #e5e5e5 transparent transparent transparent;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown {
            border: 0;
            background: #fff;
            padding: 20px 30px;
            margin-top: 2px;
            border-radius: 4px;
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown .choices__item--selectable {
            padding-right: 0;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item--selectable.is-highlighted {
            background: #fff;
            color: #63c76a;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item {
            color: #555;
            min-height: 24px;
        }

        .s003 form .inner-form .input-field.second-wrap {
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .s003 form .inner-form .input-field.third-wrap {
            width: 74px;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search {
            height: 100%;
            width: 100%;
            white-space: nowrap;
            color: #fff;
            border: 0;
            cursor: pointer;
            padding-top: 5px;
            padding-bottom: 5px;
            background: #18253e;
            transition: all .2s ease-out, color .2s ease-out;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search svg {
            width: 16px;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search:hover {
            background: #50c058;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search:focus {
            outline: 0;
            box-shadow: none;
        }

        @media screen and (max-width: 992px) {
            .s003 form .inner-form .input-field {
                height: 50px;
            }
        }

        @media screen and (max-width: 767px) {
            .s003 form .inner-form {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 20px;
            }

            .s003 form .inner-form .input-field {
                margin-bottom: 20px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }

            .s003 form .inner-form .input-field input {
                padding: 10px 15px;
            }

            .s003 form .inner-form .input-field.first-wrap {
                width: 100%;
                border-right: 0;
            }

            .s003 form .inner-form .input-field.first-wrap .choices__inner {
                padding: 10px 15px;
            }

            .s003 form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after {
                right: 11.5px;
                border-color: #e5e5e5 transparent transparent transparent;
            }

            .s003 form .inner-form .input-field.second-wrap {
                width: 100%;
                margin-bottom: 30px;
            }

            .s003 form .inner-form .input-field.second-wrap input {
                border: 1px solid rgba(255, 255, 255, 0.3);
            }

            .s003 form .inner-form .input-field.third-wrap {
                margin-bottom: 0;
                width: 100%;
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