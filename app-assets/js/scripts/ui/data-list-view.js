/*=========================================================================================
    File Name: data-list-view.js
    Description: List View
    ----------------------------------------------------------------------------------------
    Item Name: Vuesax HTML Admin Template
    Version: 1.1
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {
  "use strict";
  // init list view datatable
  var dataListView = $('.data-list-view').DataTable({
    responsive: false,
    columnDefs: [{
      orderable: true,
      targets: 0,
      checkboxes: { selectRow: true },
    }],
    "dom": '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
    "oLanguage": {
      "sLengthMenu": "_MENU_",
      "sSearch": ""
    },
    "aLengthMenu": [[4, 10, 15, 20], [4, 10, 15, 20]],
    select: {
      selector: 'td:first-child',
      style: 'multi'
    },
    order: [[1, 'asc']],
    bInfo: false,
    "pageLength": 4,
    buttons: [
      {
        text: "<i class='feather icon-plus'></i> Add New",
        action: function () {
          $(this).removeClass("btn-secondary")
          $(".add-new-data").addClass("show")
          $(".overlay-bg").addClass("show")
          $("#data-name, #data-price").val("");
          $("#data-category, #data-status").prop('selectedIndex', 0);
        },
        className: "btn-outline-primary",
      }
    ],
    initComplete: function (settings, json) {
      $(".dt-buttons .btn").removeClass("btn-secondary");
    },
  });

  // init thumb view datatable
  var dataThumbView = $(".data-thumb-view").DataTable({
    responsive: false,
    columnDefs: [{
      orderable: true,
      targets: 0,
      checkboxes: { selectRow: true },
    }],
    "dom": '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
    "oLanguage": {
      "sLengthMenu": "_MENU_",
      "sSearch": ""
    },
    "aLengthMenu": [[4, 10, 15, 20], [4, 10, 15, 20]],
    select: {
      selector: 'td:first-child',
      style: 'multi'
    },
    order: [[1, 'asc']],
    bInfo: false,
    "pageLength": 4,
    buttons: [
      {
        text: "<i class='feather icon-plus'></i> Add New",
        action: function () {
          $(this).removeClass("btn-secondary");
          $(".add-new-data").addClass("show");
          $(".overlay-bg").addClass("show");
        },
        className: "btn-outline-primary",
      }
    ],
    initComplete: function (settings, json) {
      $(".dt-buttons .btn").removeClass("btn-secondary");
    },

  })

  // To append actions dropdown before add new button
  var actionDropdown = $(".actions-dropodown")
  actionDropdown.insertBefore($(".top .actions .dt-buttons"))

  // to check and uncheck checkboxes on click of <td> tag
  $(".data-list-view, .data-thumb-view").on("click", "tbody td", function () {
    var dtCheckbox = $(this).parent("tr").find(".dt-checkboxes-cell .dt-checkboxes")
    $(this).closest("tr").toggleClass("selected");
    dtCheckbox.prop("checked", !dtCheckbox.prop("checked"))
  });

  $(".dt-checkboxes").on("click", function () {
    $(this).closest("tr").toggleClass("selected");
  })
  $(".dt-checkboxes-select-all input").on("click", function () {
    $(".data-list-view").find("tbody tr").toggleClass("selected")
    $(".data-thumb-view").find("tbody tr").toggleClass("selected")
  })
  // Scrollbar
  if ($(".data-items").length > 0) {
    new PerfectScrollbar(".data-items", { wheelPropagation: false });
  }

  // Close sidebar
  $(".hide-data-sidebar, .cancel-data-btn").on("click", function () {
    $(".add-new-data").removeClass("show");
    $(".overlay-bg").removeClass("show");
    $("#data-name, #data-price").val("");
    $("#data-category, #data-status").prop('selectedIndex', 0);
  });

  // mac chrome checkbox fix
  if (navigator.userAgent.indexOf('Mac OS X') != -1) {
    $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox");
  }

  $('button#add-data-button').click(function() {
    let name = $('#new_name').val();
    let email = $('#new_email').val();
    let status = $('#new_status').val();

    if (isEmpty(name) == true 
      || isEmpty(email) == true
      || isEmpty(status) == true) {
        $('.alert-validation-msg').show();
        $('.alert-text').text("Please fill all fields or input correct data.");
      } else {
        $('.alert-validation-msg').hide();

        $.ajax({
          type: "POST",
          url: $('button#add-data-button').attr("postUrl"),
          data: {
            name: name, 
            email: email, 
            status: status
          },
          success: function(data, status, xhr) {
            console.log(data + " " + status);
            location.reload();
          },
          error: function(xhr, status, err) {
            console.log(status + " " + err);
          }, 
          dataType: 'json'
        });

        $(".add-new-data").removeClass("show");
        $(".overlay-bg").removeClass("show");
        $('#new_name').val('');
        $('#new_email').val('');
      }
  });

  function isEmpty(value) {
    console.log(value);
    return (value == null || value === '');
  }

  $('.alert-validation-msg').hide();
});