$(document).ready(function() {
  var counter = 0;
  //allows bootstrap alerts to work
  $('.alert').alert();

  //main form submit
  $("#cash_register").submit(function(event) {
    event.preventDefault(); //!!!//
    $(".alert").removeClass('show'); //Remove alert (if there is one open)

    var id = $("#x").val()
    var Rambo = $("#a").val(); //Get barcode
    var Terminator = $("#b").val();
    var Bloodsport = $("#c").val();
    var Popcorn = $("#d").val();
    var Soda = $("#e").val();
    var Candy = $("#f").val();

    //Data to be sent--
    submitData = {
      'Rambo': Rambo,
      'Terminator': Terminator,
      'Bloodsport': Bloodsport,
      'Popcorn': Popcorn,
      'Soda': Soda,
      'Candy': Candy

    };
    $.ajax({
      method: 'post', //Details about Ajax call (POST)
      url: 'php/cash_register.php',
      data: submitData, //Data -> sent to url w/ post call
      //------------------------------------------------------------------------
      //--Replies from url------------------------------------------------------
      success: function(data) { //Success ------
        console.log(data);
        var d = $.parseJSON(data); //parse data into Dictionary
        //--debug--//--------------
        //console.log(submitData);
        console.log(d);
        console.log("Success");
        console.log(submitData);
        //console.log(d['result']);
        //--------------------------
        if (d['result'] == true) { //Everything went fine
          counter++;
          changeCounter()
          raiseAlert("none", true); //Raise success alert
          showSubmitData(id, true, "none"); //Enter success into table
        }
      },
      //------------------------------------------------------------------------
      error: function(data) { //Error// --Generic
        console.log(data);
        raiseAlert("none", false); //Raise error
        showSubmitData(id, false, "none"); //Enter error into table
      }
      //End of replies from url ------------------------------------------------
    }); //End of Ajax call
    $("#a").val("");
    $("#b").val("");
    $("#c").val("");
    $("#d").val("");
    $("#e").val("");
    $("#f").val("");

  }); //Done Submit Funtion

  //This function shows input Success/Errors on the table
  // id: Batteryid  || success: true/false || e: "known error"
  function showSubmitData(id, success, e) {
    if (success == true) { //If successful ---
      tableLine = '<tr id="addedrow"><th>' + counter + '</th>';
      tableLine += "<th class='alert-success'>Success</th></tr>"; //Show Green
    } else { //If error ---------------------
      tableLine = "<tr id='addedrow'><th class='alert-danger'>Error</th><th class='alert-danger'>" + id + '</th>'; //Know error duplicate \/                                                        //Unknown error// --Generic
      tableLine += "<th class='alert-danger'>Error: not sure what happened</th></tr>";
    }


    $(tableLine).prependTo('#dataTable > tbody'); //Add tableLine to top row
  }; //Done showSubmitData

  //Deals with Bootstrap Alerts
  // id: Batteryid || success: true/false
  function raiseAlert(id, success) {
    if (success == true) { //If successful---------
      if ($(".alert").hasClass("alert-danger")) { //If danger class
        $(".alert").removeClass("alert-danger"); //Remove danger class//
      };

      $(".alert").addClass("alert-success"); //Add success class \/ add text
      $("#alertText").html("<strong>Success!</strong> Transaction Complete.");
      //--------------------------------------------------------------------------
    } else { //If error---------------
      if ($(".alert").hasClass("alert-success")) { //If success class
        $("alert").removeClass("alert-success"); //Remove success class//
      };

      $(".alert").addClass("alert-danger"); //Add danger class

      if (id != "none") { //if id is given - (known error) \/ enter text
        $("#alertText").html("<strong>Error!</strong> '" + id + "' Data not submitted, talk to tech team");
      } else { //Unknown error// --Generic
        $("#alertText").html("<strong>Error!</strong> Something went wrong.");
      }
    }

    //Show alert (success or error) and add cool lookin animation//
    $(".alert").addClass('show');
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
      $(".alert").slideUp(500);
    });
  } //End raiseAlert

  function changeCounter() {
    $("#count").html(counter);
  }

  //Override alert's default X -> "Close"
  $('a').click(function(e) {
    e.preventDefault(); //!!!//

    //Instead of default (destroying alert)
    //Only hide and keep reusing the same alert---
    $(".alert").removeClass('show');
    return false;
  }); //End Override

}); //End Document Ready------
