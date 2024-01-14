$(document).ready(function () {
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();

    //enable disable based on taxinfo and birth_reg Info
    $("#is_taxpayer").on("click", function () {
        if ($(this).prop("checked") == true) {
            $("#TaxInfo").show();
            $("#codeTax").prop("disabled", false);
            $("#is_minor").prop("disabled", true);
            $("#citizenship").prop("required", true);
            $("#citizenship_issued_date_bs").prop("required", true);
            $("#citizenship_issued_date_ad").prop("required", true);
            $("#citizenship_issued_districtId").prop("required", true);
            $("#codeTax").prop("required", true);
            $("#new_iid").prop("required", true);
        } else if ($(this).prop("checked") == false) {
            $("#TaxInfo").hide();
            $("#is_minor").prop("disabled", false);
            $("#codeTax").prop("required", false).prop("disabled", true);
            // $('#new_iid').prop('required', true);
        } else {
            $("#is_taxpayer").prop("disabled", false);
            $("#is_minor").prop("disabled", false);
            $("#citizenship").prop("required", true);
            $("#citizenship_issued_date_bs").prop("required", true);
            $("#citizenship_issued_date_ad").prop("required", true);
            $("#citizenship_issued_districtId").prop("required", true);
        }
    });

    $("#is_minor").on("click", function () {
        if ($(this).prop("checked") == true) {
            $("#dob_reg_info").show();
            $("#ctzn_info").hide();
            $("#TaxInfo").hide();
            $("#is_taxpayer").prop("disabled", true);
            $("#birth_reg").prop("required", true);
            $("#citizenship").prop("required", false);
            $("#citizenship_issued_date_bs").prop("required", false);
            $("#citizenship_issued_date_ad").prop("required", false);
            $("#citizenship_issued_districtId").prop("required", false);
        } else if ($(this).prop("checked") == false) {
            $("#dob_reg_info").hide();
            // $('#TaxInfo').hide();
            $("#is_taxpayer").prop("disabled", false);
            $("#ctzn_info").show();
            $("#birth_reg").prop("required", false);
            $("#citizenship").prop("required", true);
            $("#citizenship_issued_date_bs").prop("required", true);
            $("#citizenship_issued_date_ad").prop("required", true);
            $("#citizenship_issued_districtId").prop("required", true);
        } else {
            $("#is_taxpayer").prop("disabled", false);
            $("#is_minor").prop("disabled", false);
            $("#citizenship").prop("required", true);
            $("#citizenship_issued_date_bs").prop("required", true);
            $("#citizenship_issued_date_ad").prop("required", true);
            $("#citizenship_issued_districtId").prop("required", true);
        }
    });

    // fetch data from tax

    $("#codeTax").change(function () {
        var taxId = $("#codeTax").val();
        // var new_iid = $('#new_id').val();
        if (taxId) {
            $.ajax({
                type: "GET",
                url: site_url + "/fillForm" + "/" + taxId,
                success: function (data) {
                    if (data.firstNameNepali) {
                        $("#applicantId").val(data.applicantId);
                        $("#verify").val("t");
                        $("#new_iid").val(data.new_iid).focus();

                        $("#firstNamenp").val(data.firstNameNepali).focus();
                        $("#middleNamenp").val(data.middleNameNepali).focus();
                        $("#lastNamenp").val(data.lastNameNepali).focus();
                        $("#firstNameen").val(data.firstNameEnglish).focus();
                        $("#middleNameen").val(data.middleNameEnglish).focus();
                        $("#lastNameen").val(data.lastNameEnglish).focus();
                        $("#email").val(data.mail).focus();
                        $("#mobiles").val(data.mob).focus();
                        $("#citizenship").val(data.citizen).focus();
                        $("#issued_date_bs").val(data.citizenDateBs).focus();
                        $("#issued_date_ad").val(data.citizenDateAd).focus();
                        // $('#Code').val(data.taxpayer_code);
                        $("#citizenship_issued_districtId")
                            .val(data.citizenDatedis)
                            .trigger("change");

                        // if (data.firstNameNepali) {
                        //     document.getElementById("firstNameNepali").style.display = 'none';
                        //     document.getElementById("middleNameNepali").style.display = 'none';
                        //     document.getElementById("lastNameNepali").style.display = 'none';
                        //     document.getElementById("firstNameEnglish").style.display = 'none';
                        //     document.getElementById("middleNameEnglish").style.display = 'none';
                        //     document.getElementById("lastNameEnglish").style.display = 'none';
                        // }
                        // if (data.mail != null) {
                        //     document.getElementById("mail").style.display = 'none';
                        // }
                        // if (data.mob != null) {
                        //     document.getElementById("mob").style.display = 'none';
                        // }
                        // if (data.citizen != null) {
                        //     document.getElementById("citizen").style.display = 'none';
                        //     document.getElementById("citizenDateNp").style.display = 'none';
                        //     document.getElementById("citizenDateEn").style.display = 'none';
                        //     document.getElementById("citizenDis").style.display = 'none';
                        // }
                    } else {
                        $("#verify").val("f");
                        $("#new_iid").val(data.new_iid).focus();

                        $("#firstNamenp").val(data.first_name_np).focus();
                        $("#middleNamenp").val(data.middle_name_np).focus();
                        $("#lastNamenp").val(data.last_name_np).focus();
                        $("#firstNameen").val(data.first_name_en).focus();
                        $("#middleNameen").val(data.middle_name_en).focus();
                        $("#lastNameen").val(data.last_name_en).focus();
                        $("#email").val(data.email).focus();
                        $("#mobiles").val(data.mobiles).focus();
                        $("#citizenship").val(data.citizenship_number).focus();
                        $("#issued_date_bs")
                            .val(data.citizenship_issued_date_bs)
                            .focus();
                        $("#issued_date_ad")
                            .val(data.citizenship_issued_date_ad)
                            .focus();
                        // $('#codeTax').val(data.code);
                        $("#citizenship_issued_districtId")
                            .val(data.citizenship_issued_district_id)
                            .trigger("change");

                        // if (data.first_name_np != null) {
                        //     document.getElementById("firstNameNepali").style.display = 'none';
                        //     document.getElementById("middleNameNepali").style.display = 'none';
                        //     document.getElementById("lastNameNepali").style.display = 'none';
                        //     document.getElementById("firstNameEnglish").style.display = 'none';
                        //     document.getElementById("middleNameEnglish").style.display = 'none';
                        //     document.getElementById("lastNameEnglish").style.display = 'none';
                        // }

                        // if (data.email != null) {
                        //     document.getElementById("mail").style.display = 'none';

                        // }
                        // if (data.mobiles != null) {
                        //     document.getElementById("mob").style.display = 'none';
                        // }
                        // if (data.citizenship_number != null) {
                        //     document.getElementById("citizen").style.display = 'none';
                        //     document.getElementById("citizenDateNp").style.display = 'none';
                        //     document.getElementById("citizenDateEn").style.display = 'none';
                        //     document.getElementById("citizenDis").style.display = 'none';
                        // }
                    }
                },
                error: function (jqXHR, exception) {
                    alert("Invalid Tax Payer Code");
                },
            });
        }
    });

    $("#new_iid").change(function () {
        // var taxId = $('#codeTax').val();
        var new_iid = $("#new_iid").val();
        if (new_iid) {
            $.ajax({
                type: "GET",
                url: site_url + "/getTaxpayer" + "/" + new_iid,
                success: function (data) {
                    if (data.firstNameNepali) {
                        $("#applicantId").val(data.applicantId);
                        $("#verify").val("t");
                        // $('#new_iid').val(data.new_iid);

                        $("#firstNamenp").val(data.firstNameNepali).focus();
                        $("#middleNamenp").val(data.middleNameNepali).focus();
                        $("#lastNamenp").val(data.lastNameNepali).focus();
                        $("#firstNameen").val(data.firstNameEnglish).focus();
                        $("#middleNameen").val(data.middleNameEnglish).focus();
                        $("#lastNameen").val(data.lastNameEnglish).focus();
                        $("#email").val(data.mail).focus();
                        $("#mobiles").val(data.mob).focus();
                        $("#citizenship").val(data.citizen).focus();
                        $("#issued_date_bs").val(data.citizenDateBs).focus();
                        $("#issued_date_ad").val(data.citizenDateAd).focus();
                        $("#codeTax").val(data.taxpayer_code).focus();
                        $("#citizenship_issued_districtId")
                            .val(data.citizenDatedis)
                            .trigger("change")
                            .focus();

                        // if (data.firstNameNepali) {
                        //     document.getElementById("firstNameNepali").style.display = 'none';
                        //     document.getElementById("middleNameNepali").style.display = 'none';
                        //     document.getElementById("lastNameNepali").style.display = 'none';
                        //     document.getElementById("firstNameEnglish").style.display = 'none';
                        //     document.getElementById("middleNameEnglish").style.display = 'none';
                        //     document.getElementById("lastNameEnglish").style.display = 'none';
                        // }
                        // if (data.mail != null) {
                        //     document.getElementById("mail").style.display = 'none';
                        // }
                        // if (data.mob != null) {
                        //     document.getElementById("mob").style.display = 'none';
                        // }
                        // if (data.citizen != null) {
                        //     document.getElementById("citizen").style.display = 'none';
                        //     document.getElementById("citizenDateNp").style.display = 'none';
                        //     document.getElementById("citizenDateEn").style.display = 'none';
                        //     document.getElementById("citizenDis").style.display = 'none';
                        // }
                    } else {
                        $("#verify").val("f");
                        // $('#new_iid').val(data.new_iid);

                        $("#firstNamenp").val(data.first_name_np).focus();
                        $("#middleNamenp").val(data.middle_name_np).focus();
                        $("#lastNamenp").val(data.last_name_np).focus();
                        $("#firstNameen").val(data.first_name_en).focus();
                        $("#middleNameen").val(data.middle_name_en).focus();
                        $("#lastNameen").val(data.last_name_en).focus();
                        $("#email").val(data.email).focus();
                        $("#mobiles").val(data.mobiles).focus();
                        $("#citizenship").val(data.citizenship_number).focus();
                        $("#issued_date_bs")
                            .val(data.citizenship_issued_date_bs)
                            .focus();
                        $("#issued_date_ad")
                            .val(data.citizenship_issued_date_ad)
                            .focus();
                        $("#codeTax").val(data.code).focus();
                        $("#citizenship_issued_districtId")
                            .val(data.citizenship_issued_district_id)
                            .trigger("change")
                            .focus();

                        // if (data.first_name_np != null) {
                        //     document.getElementById("firstNameNepali").style.display = 'none';
                        //     document.getElementById("middleNameNepali").style.display = 'none';
                        //     document.getElementById("lastNameNepali").style.display = 'none';
                        //     document.getElementById("firstNameEnglish").style.display = 'none';
                        //     document.getElementById("middleNameEnglish").style.display = 'none';
                        //     document.getElementById("lastNameEnglish").style.display = 'none';
                        // }

                        // if (data.email != null) {
                        //     document.getElementById("mail").style.display = 'none';

                        // }
                        // if (data.mobiles != null) {
                        //     document.getElementById("mob").style.display = 'none';
                        // }
                        // if (data.citizenship_number != null) {
                        //     document.getElementById("citizen").style.display = 'none';
                        //     document.getElementById("citizenDateNp").style.display = 'none';
                        //     document.getElementById("citizenDateEn").style.display = 'none';
                        //     document.getElementById("citizenDis").style.display = 'none';
                        // }
                    }
                },
                error: function (jqXHR, exception) {
                    alert("Invalid Tax Payer Code");
                },
            });
        }
    });

    //username duplication check
    $("#userName").on("keyup", function () {
        let userName = $("#userName").val();

        $.get(
            site_url + "/chk_user",
            {
                user_name: userName,
            },
            function (data) {
                if (data.success == true) {
                    // alert(data.message)
                    $("#userName").parent().removeClass("has-success");
                    $("#userName").parent().addClass("has-error");
                    $("#userName")
                        .parent()
                        .find(".invalid-feedback")
                        .html(
                            "Username पहिल्यै नै छ, कृपया अर्को Username राख्नुहोस"
                        )
                        .css({
                            "margin-top": "0rem",
                        });
                    $("#userName").parent().find(".invalid-feedback").show();
                    $("#registerUser").prop("disabled", true);
                    $("#userName").focus();
                } else {
                    $("#userName").parent().find(".invalid-feedback").hide();
                    $("#userName").parent().removeClass("has-error");
                    $("#userName").parent().addClass("has-success");
                    $("#registerUser").prop("disabled", false);
                }
            }
        );
    });

    //unicode
    $(".type_np").on("keyup", function () {
        var code = $(this).val();
        $(this).val(convert_to_unicode(code));
    });

    $("document").ready(function () {
        setTimeout(function () {
            $("div.alert").remove();
        }, 50000); //5 secs
    });

    $("#citizenship_issued_date_ad").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        onSelect: function (date) {
            var arr = date.split("-");
            var adToBs = NepaliFunctions.ConvertDateFormat(
                NepaliFunctions.AD2BS({
                    year: arr[0],
                    month: arr[1],
                    day: arr[2],
                })
            );
            $("#citizenship_issued_date_bs").val(adToBs).focus();
            // $('#citizenship_issued_date_ad' ).val(date).focus();
        },
        onClose: function (date) {
            $("#citizenship_issued_date_ad").val(date).focus();
        },
    });

    $(".nepaliDatePicker").inputmask("yyyy/mm/dd", {
        placeholder: "YYYY/MM/DD",
    });
    $(".input_date").inputmask("yyyy-mm-dd", {
        placeholder: "YYYY-MM-DD",
    });
    $("#mobiles").inputmask("9999999999", {
        placeholder: "9xxxxxxxxx",
    });
    $(".select2-single").select2({
        paddingRight: "70px",
        containerCssClass: ":all:",
    });

    // $("#citizenship_issued_date_bs").on("blur", function (e) {
    //     var date = document.getElementById("citizenship_issued_date_bs").value;
    //     if (!(date) && date.length !== 10) return;
    //     var arr = date.split("-");
    //     var bsToAd = NepaliFunctions.ConvertDateFormat(NepaliFunctions.BS2AD({
    //         year: arr[0],
    //         month: arr[1],
    //         day: arr[2]
    //     }));
    //     $('#citizenship_issued_date_bs').focus();
    //     $('#citizenship_issued_date_ad').val(bsToAd).focus();
    // });

    // $("#citizenship_issued_date_ad").on("blur", function (e) {
    //     var mainInput = document.getElementById("citizenship_issued_date_ad").value;
    //     if (!(mainInput) && mainInput.length !== 10) return;
    //     var arr = mainInput.split("-");
    //     var adToBs = NepaliFunctions.ConvertDateFormat(NepaliFunctions.AD2BS({
    //         year: arr[0],
    //         month: arr[1],
    //         day: arr[2]
    //     }));
    //     $('#citizenship_issued_date_bs').val(adToBs).focus();
    //     $('#citizenship_issued_date_ad').focus();

    // });

    $("#citizenship_issued_date_bs").nepaliDatePicker({
        dateFormat: "YYYY/MM/DD",
        ndpYear: true,
        ndpMonth: true,
        ndpYearCount: 100,

        onChange: function () {
            var date = $("#citizenship_issued_date_bs").val();
            var arr = date.split("/");
            var bsToAd = NepaliFunctions.ConvertDateFormat(
                NepaliFunctions.BS2AD({
                    year: arr[0],
                    month: arr[1],
                    day: arr[2],
                })
            );
            $("#citizenship_issued_date_bs").focus();
            $("#citizenship_issued_date_ad").val(bsToAd).focus();
        },
    });

    //passwords not matched check
    $("#password_confirmation").on("keyup", function () {
        var passwordconfirm = $(this).val();
        // alert(passwordconfirm);
        var password = $("#password").val();
        if (password) {
            if (passwordconfirm != password) {
                // alert('पासवर्ड मेल खाएन !!!');
                $(this).parent().addClass("has-error");
                $(this).parent().removeClass("has-success");
                // $('#registerUser').prop('disabled', true);
                $(this).parent().find(".invalid-feedback").css({
                    "margin-top": "0rem",
                });
                $(this)
                    .parent()
                    .find(".invalid-feedback")
                    .html("Password संग मेल खाएन !");
                $(this).parent().find(".invalid-feedback").show();
            } else {
                $(this).parent().removeClass("has-error");
                $(this).parent().addClass("has-success");
                // $('#registerUser').prop('disabled', false);
                // $(this).parent().find('.invalid-feedback').removeAttr("style")
                $(this)
                    .parent()
                    .find(".invalid-feedback")
                    .html("Confirm Password अनिवार्य छ |");
                $(this).parent().find(".invalid-feedback").hide();
            }
        } else {
            $("#password_confirmation")
                .find(".invalid-feedback")
                .html("Confirm Password अनिवार्य छ |");
            alert("पासवर्ड  अनिवार्य छ !!");
            $("#password").focus();
        }
    });

    //password validation
    $("#password").on("keyup", function () {
        var password = $(this).val();
        var pregex =
            /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
        if (password) {
            if (password.match(pregex)) {
                // $(this).parent().find('.invalid-feedback').html('Valid Password Format').css({
                //     'margin-top': '0rem','text-color':'green !important'
                // });
                // $(this).parent().find('.invalid-feedback').show();
                $(this).parent().find(".invalid-feedback").hide();
                $(this).parent().removeClass("has-error");
                $(this).parent().addClass("has-success");
            } else {
                $(document).find(".strength-meter").css({
                    "margin-bottom": "24px",
                });
                $(this).parent().removeClass("has-success");
                $(this).parent().addClass("has-error");
                $(this)
                    .parent()
                    .find(".invalid-feedback")
                    .addClass("eng_text")
                    .html(
                        "Password Must Contain at least 8 characters with 1 Lowercase,1 Uppercase<br>1digit and 1special char"
                    )
                    .css({
                        "margin-top": "0rem",
                    });
                $(this).parent().find(".invalid-feedback").show();
            }
        } else {
            $(this).find(".invalid-feedback").html("Password अनिवार्य छ |");
            $(this).parent().find(".invalid-feedback").show().css({
                "margin-top": "0px",
            });
        }
    });
    //hide/show password
    $(".toggle-passwordreg").click(function () {
        if ($("#password").attr("type") == "password") {
            $("#password").attr("type", "text");
        } else {
            $("#password").attr("type", "password");
        }
    });
    $(".toggle-passwordcon").click(function () {
        if ($("#password_confirmation").attr("type") == "password") {
            $("#password_confirmation").attr("type", "text");
        } else {
            $("#password_confirmation").attr("type", "password");
        }
    });

    //email validation
    $("#email").on("keyup", function () {
        var email = $(this).val();
        var eregex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if (email) {
            if (email.match(eregex)) {
                // $(this).parent().find('.invalid-feedback').html('Valid Password Format').css({
                //     'margin-top': '0rem','text-color':'green !important'
                // });
                // $(this).parent().find('.invalid-feedback').show();
                $(this).parent().find(".invalid-feedback").hide();
                $(this).parent().removeClass("has-error");
                $(this).parent().addClass("has-success");
            } else {
                // $(document).find('.strength-meter').css({
                //     'margin-bottom': '24px'
                // });
                $(this).parent().removeClass("has-success");
                $(this).parent().addClass("has-error");
                $(this)
                    .parent()
                    .find(".invalid-feedback")
                    .addClass("eng_text")
                    .html("Invalid Email Format")
                    .css({
                        "margin-top": "0rem",
                    });
                $(this).parent().find(".invalid-feedback").show();
            }
        } else {
            $(this).find(".invalid-feedback").html("Email अनिवार्य छ |");
            $(this).parent().find(".invalid-feedback").show().css({
                "margin-top": "0px",
            });
        }
    });
    //mobile validation
    $("#mobileNo").on("keyup", function () {
        var mobile = $(this).val();
        var mobregex = /^[9][0-9]{9}$/;
        if (mobile) {
            if (mobile.match(mobregex)) {
                $(this).parent().find(".invalid-feedback").hide();
                $(this).parent().removeClass("has-error");
                $(this).parent().addClass("has-success");
            } else {
                // alert('invalid');
                // $(document).find('.strength-meter').css({
                //     'margin-bottom': '24px'
                // });
                $(this).parent().removeClass("has-success");
                $(this).parent().addClass("has-error");
                $(this)
                    .parent()
                    .find(".invalid-feedback")
                    .addClass("eng_text")
                    .html("Must contain 10 digits")
                    .css({
                        "margin-top": "0rem",
                    });
                $(this).parent().find(".invalid-feedback").show();
            }
        } else {
            $(this).find(".invalid-feedback").html("Mobile अनिवार्य छ |");
            $(this).parent().find(".invalid-feedback").show().css({
                "margin-top": "0px",
            });
        }
    });
});
