<!DOCTYPE html>
<html>
<head>
  <title>OsmAnd Live</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel='stylesheet' href="site.css">
  <link rel='stylesheet' href="reports/report.css">
  <link rel='stylesheet' href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="images/favicons/manifest.json">
  <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="images/favicons/favicon.ico">
  <meta name="msapplication-config" content="images/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
</head>
<body>
<div class="maincontainer">
  <div class="main">
    <?php 
      $simpleheader_header = "OSM LIVE";
      include 'blocks/simple_header.php';
    ?>
    <div class="nav-holder">
      <ul class="navigation">
        <li class="active"><a data-toggle="tab" href="#information">Information</a></li>
        <li><a data-toggle="tab" href="#report">OSM Contributions</a></li>
        <li><a data-toggle="tab" href="#donate">Supporters</a></li>
        <li><a data-toggle="tab" href="#recipients">Recipients</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="tab-content">
        <div id="report" class="tab-pane fade">
          <h2>OSM Contributions</h2>
          <div class="report-period-group">
            <div class="report-group period">
              <h4 class="vlabel" for="month-selection">Report period</h4>
              <div class="styled-select">
                <select class="form-control" id="month-selection"></select>
              </div>
            </div>
            <div class="report-group region">
              <h4 class="vlabel" for="region-selection">Region</h4>
              <div class="styled-select">
                <select class="form-control" id="region-selection"></select>
              </div>
            </div>
          </div>
          <div class="report-total-div">
            <div class="overview-body">
              <p class='overview-hint'>Overview for: <span id="overview-contributors_options"></span></p>
              <div id="report-total" class="infobox"></div>
            </div>
          </div>
          <h4 class="vlabel" for="report-table" id="report-ranking"></h4>
          <table id="report-table" class="table table-bordered" cellspacing="0" width="100%"></table>
          <h4 class="vlabel" for="users-table" id="users-ranking"></h4>
          <div class="table-controls hidden">
            <div class="tc search">
              <input type="search" class="form-control" aria-control="users-table" id="users-table-search" placeholder="Search">
            </div>
            <div class="tc entries">
              <label>
              <span>Show entries</span>
              <div class="styled-select">
                <select name="users-table_length" aria-controls="users-table" class="form-control" id="users-table-select">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50" selected>50</option>
                  <option value="100">100</option>
                </select>
              </div>
              </label>
            </div>
          </div>
          <table id="users-table" class="table table-bordered" cellspacing="0" width="100%"></table>
        </div>
        <div id="donate" class="tab-pane fade ">
          <h2>Supporters</h2>
          <div class="supporters-total-holder">
            <div class="report-period-group supporters">
              <div class="report-group period">
                <h4 class="vlabel" for="donate-month-selection">Report period</h4>
                <div class="styled-select">
                  <select class="form-control osm-live-month-select" id="donate-month-selection"></select>
                </div>
              </div>
            </div>
            <div class="supporters-total" id="donator-report-total-div">
              <div class="panel-body">
                <p class='overview-hint'>Overview for: <span id="overview-supporters_options"></span></p>
                <div id="donator-report-total" class="infobox"></div>
              </div>
            </div>
          </div>
          <h4 class="vlabel" for="support-country-table" id="support-country-table-header">Supported countries</h4>
          <div class="table-controls support-country-controls hidden">
            <div class="tc search">
              <input type="search" class="form-control" aria-control="support-country-table" id="support-country-table-search" placeholder="Search">
            </div>
            <div class="tc entries">
              <label>
              <span>Show entries</span>
              <div class="styled-select">
                <select name="support-country-table_length" aria-controls="support-country-table" class="form-control" id="support-country-table-select">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50" selected>50</option>
                  <option value="100">100</option>
                </select>
              </div>
              </label>
            </div>
          </div>
          <table id="support-country-table" class="table table-bordered" cellspacing="0" width="100%"></table>
          <h4 class="vlabel" for="support-table" id="support-table-header">OSM Live supporters</h4>
          <div class="table-controls support-controls hidden">
            <div class="tc search">
              <input type="search" class="form-control" aria-control="support-table" id="support-table-search" placeholder="Search">
            </div>
            <div class="tc entries">
              <label>
              <span>Show entries</span>
              <div class="styled-select">
                <select name="support-table_length" aria-controls="support-table" class="form-control" id="support-table-select">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50" selected>50</option>
                  <option value="100">100</option>
                </select>
              </div>
              </label>
            </div>
          </div>
          <table id="support-table" class="table table-bordered" cellspacing="0" width="100%"></table>
        </div>
        <div id="information" class="tab-pane fade in active">
          <div id="general-info-div">
            <div id="general-info" class="infobox"></div>
          </div>
          <div class="registration recipient-registration" id="recipients-register-div">
            <h4 class="vlabel" for="recipients-register-div">Register as a recipient</h4 >
            <div class="alert alert-danger" role="alert" id="osm_register_failed" style="display:none">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 
              OSM Authentication has failed.
            </div>
            <div class="alert alert-success" role="alert" id="osm_register_success" style="display:none">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 
              You successfully registered as a recipient.
            </div>
            <form role="form" action="subscription/register_osm.php" method="post" id="register_osm">
              <label for="osm_usr">OpenStreetMap user name:</label>
              <div class="input-holder input-user">
                <input type="text" class="form-control" id="osm_usr" name="osm_usr">
              </div>
              <p class="input-hint">We use OpenStreetMap.org API to access user statistic.</p>
              <label for="osm_pwd">OpenStreetMap password:</label>
              <div class="input-holder input-pass">
                <input type="password" class="form-control" id="osm_pwd" name="osm_pwd">
              </div>
              <p class="input-hint">We do not store it on servers.</p>
              <!-- <label for="email">Email address:</label>
              <div class="input-holder">
                <input type="text" class="form-control" id="email" name="email">
              </div> -->
              <label for="bitcoin_addr">Bitcoin address:</label>
              <div class="input-holder input-bitcoin">
                <input type="text" class="form-control" id="bitcoin_addr" name="bitcoin_addr">
              </div>
              <p class="input-hint">We use OpenStreetMap.org API to access user statistic.</p>
              <button type="submit" class="btn btn-default" id="register_osm_user">Register</button>
            </form>
          </div>
          <div class="registration contributor-registration" id="contributor-register-div">
            <h4 class="vlabel" for="recipients-register-div">Register as a contributor</h4 >
            <p>If you want support OSM buy OsmAnd OSM Live Subscription, you can do it directly in application.</p>
            <div class="registration-badges">
              <a data-gatag="googleplay" href="https://play.google.com/store/apps/details?id=net.osmand.plus"><img alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en-play-badge.png" /></a>
            </div>
            <h5 class="vlabel">Donate without any extra charges:</h5>
            <p>If you want to donate without any extra charges and directly to OSM contributors please transfer funds to this Bitcoin address</p>
            <div class="btc-address">1GRgEnKujorJJ9VBa76g8cp3sfoWtQqSs4</div>
            <p>The payouts are distributed based on the ranking which is available in OSM Contributions tab, th last ranking has weight&nbsp;=&nbsp;1, the ranking before the last has weight&nbsp;=&nbsp;2 and so on till the 1st ranking.</p>
          </div>
        </div>
        <div id="recipients" class="tab-pane fade">
          <h2>Recipients</h2>
          <!--
            <h4 class="vlabel" for="recipients-info-div">Information</h4 >
              <div class="panel panel-default" id="recipients-info-div">
                  <div class="panel-body"><p id="recipients-general-info" class="infobox"></p></div>
              </div>
            <hr>
          -->
          <div class="report-period-group">
            <div class="report-group period">
              <h4 class="vlabel" for="recipient-month-selection">Report period</h4>
              <div class="styled-select">
                <select class="form-control osm-live-month-select" id="recipient-month-selection"></select>
              </div>
            </div>
            <div class="report-group region">
              <h4 class="vlabel" for="recipient-region-selection">Region</h4>
              <div class="styled-select">
                <select class="form-control" id="recipient-region-selection"></select>
              </div>
            </div>
          </div>
          <div class="report-total-div">
            <div class="overview-body">
              <div id="recipients-data-info" class="infobox"></div>
            </div>
          </div>
          <h4 class="vlabel" for="recipients-table" id="recipients-table-header">OSM Recipients</h4>
          <div class="table-controls recipients-controls hidden">
            <div class="tc search">
              <input type="search" class="form-control" aria-control="recipients-table" id="recipients-table-search" placeholder="Search">
            </div>
            <div class="tc entries">
              <label>
              <span>Show entries</span>
              <div class="styled-select">
                <select name="recipients-table_length" aria-controls="recipients-table" class="form-control" id="recipients-table-select">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50" selected>50</option>
                  <option value="100">100</option>
                </select>
              </div>
              </label>
            </div>
          </div>
          <table id="recipients-table" class="table table-bordered" cellspacing="0" width="100%"></table>
        </div>
      </div>
    </div>
    <?php include 'blocks/footer.html'; ?>
  </div>
</div>
<script>
  $.urlParam = function(name){
      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
      if (results==null){
         return null;
      }
      else{
         return results[1] || 0;
      }
  }
  var extended = $.urlParam('full') == 'yes';
  var mid = "";
  var midName = "";
  var supportMonth = "";
  var supportMonthName = "";
  var region = "";
  var regionName = "";
  var regionsmap = {};
  var regionsbydownloadname = {};
  var recipientMonth = "";
  var recipientMonthName = "";
  var recipientRegion = "";
  var recipientRegionName = "";

  var floatFormat = function (o) { 
      var fl = parseFloat(o) * 100;
      return Math.round(fl) / 100.;
  }
  
  function regionDepth(region, regionsmap) {
    if(region.parentid in regionsmap) {
      return regionDepth(regionsmap[region.parentid], regionsmap) + 1;
    } else {
      return 0;
    }
  }
  
  function updateRegions() {
    $('#region-selection').empty();
    $('#recipient-region-selection').empty();
    regionsmap = {};
    regionsbydownloadname = {};
    if(regionName.length > 0 && regionName != "Worldwide") {
      $("#region-selection").append("<option value='"+region+"'>"+regionName+"</option>"); 
    }
    if(recipientRegionName.length > 0 && recipientRegionName != "Worldwide") {
      $("#recipient-region-selection").append("<option value='"+recipientRegion+"'>"+recipientRegionName+"</option>"); 
    }
    $("#region-selection").append("<option value=''>Worldwide</option>"); 
    $("#recipient-region-selection").append("<option value=''>Worldwide</option>"); 
    $.ajax({
        url: "reports/query_report.php?report=all_countries", 
        async: true
      }).done(function(res) {
        var data = jQuery.parseJSON( res );
        var namemap = {};
        for(i = 0; i < data.rows.length; i++) {
          var row = data.rows[i];
          regionsmap[data.rows[i].id] = data.rows[i];
          if(row.downloadname && row.map == "1" ) {
  
            var name = row.name;
            var depth = regionDepth(row, regionsmap);
            if(depth > 2 || (depth == 2 && regionsmap[row.parentid].name == "Russia")) {
              var parent = regionsmap[row.parentid];
              var parentparent = regionsmap[parent.parentid];
              if(depth == 3) {
                if(parentparent.name == "Russia") {
                  name = parentparent.name + " " + name;
                } else if(parent.name != "United Kingdom"){
                  name = parent.name + " " + name;
                }
              } else {
                // only england
                name = parent.name + " " + name;
              }
            } 
            namemap[name] = row.downloadname;
            regionsbydownloadname[row.downloadname] = name;
          }
      }
      var sorted_keys = Object.keys(namemap).sort()
      for(i = 0; i < sorted_keys.length; i++) {
        $("#region-selection").append("<option value='"+namemap[sorted_keys[i]]+"'>"+sorted_keys[i]+"</option>"); 
        $("#recipient-region-selection").append("<option value='"+namemap[sorted_keys[i]]+"'>"+sorted_keys[i]+"</option>"); 
      }
    });
  }
  
  function updateTotalChanges() {
    $('#report-total').empty();
    $.ajax({
        url: "reports/query_report.php?report=total_changes_by_month&month="+mid+"&region="+region, 
        async: true
      }).done(function(res) {
        var data = jQuery.parseJSON( res );
        var html = "<div class='overview overview-changes'><p>" + data.changes + "</p><span>changes</span></div>" 
          + "<div class='overview overview-users'><p>" + data.users   + "</p><span>contributors</span></div>";
        if(regionName.length > 0) {
           html = html + "<div class='overview overview-region'><p>" + regionName + "</p><span>country</span></div>";
        } 
        $('#report-total').html(html);
        setContributorsOverviewHint();
    });
  }
  
  function skuApp(value) {
    if(value == "osm_live_subscription_1" || value == "osm_live_subscription_2") {
      return "OsmAnd+";
    }
    if(value == "osm_free_live_subscription_1" || value == "osm_free_live_subscription_2") {
      return "OsmAnd";
    }
    return "-";
  }
  
  function countryName(value) {
    if(value == '') {
      return "Worldwide";
    }
    if(value in regionsbydownloadname) {
      return regionsbydownloadname[value];
    }
    return value;
  }
  
  
  var reportRecipientsDataTable;
  function updateRecipientsByMonth() {
    if(reportRecipientsDataTable) {
      reportRecipientsDataTable.destroy();
    }
    $.ajax({
          url: "reports/query_report.php?report=recipients_by_month&month="+recipientMonth+"&region="+recipientRegion, 
          async: true
    }).done(function(res) {
          var data = jQuery.parseJSON( res );
          //$("#recipients-general-info").html(intro);
          $("#recipients-data-info").html(data.message);
          var list = data.rows.map(function(key){
              if(data.regionTotalWeight > 0) {
                key.percent = key.weight + " / " + data.regionTotalWeight ;
              } else {
                key.percent = '';
              }
              key.mbtc = (key.btc * 1000.).toFixed(4)  + " mBTC";
              return key;
          });
          var rowPerPage = function(windowWidth) {
            if (windowWidth < 380) {
              return 10;
            } else if (windowWidth < 650) {
              return 20;
            } else if (windowWidth < 970) {
              return 30;
            } else {
              return 50;
            }
          }
          reportRecipientsDataTable = $('#recipients-table').DataTable({
              data: list,
              destroy: true,
              columns: [
                  { "data": "osmid", title: "OSM ID"},
                  { "data": "changes", title: "OSM Changes"},
                  { "data": "rank", title: "Rank"},
                  { "data": "weight", title: "Weight"},
                  { "data": "percent", title: "Part"},
                  { "data": "mbtc", title: "Sum"},
                  { "data": "btcaddress", title: "Bitcoin Address"}
              ],
              "paging":   true,
              "iDisplayLength": rowPerPage($(window).width()),
              "info":     false,
              "bAutoWidth": false,
              "dom": "tip"
          });
          $('.table-controls.recipients-controls').removeClass('hidden');
    });
  }
  
  
  var reportSupportDataTable;
  var reportSupportCountryDataTable;
  function updateSupportByMonth() {
    if(reportSupportDataTable) {
      reportSupportCountryDataTable.destroy();
      reportSupportDataTable.destroy();
    }
    $.ajax({
          url: "reports/query_report.php?report=supporters_by_month&month="+supportMonth+"&full="+extended, 
          async: true
    }).done(function(res) {
          var data = jQuery.parseJSON( res );
          if(extended) {
            data.rows.push.apply(data.rows, data.notactive)
          }
          $('#donator-report-total').html("<div class='overview overview-active_supporters'><p>" + data.activeCount + 
              "</p><span>active donors</span></div>" 
              + "<div class='overview overview-register_supporters'><p>" + data.count +"</p><span>registered supporters</span></div>" );
          var regionsList = Object.keys(data.regions).map(function(key){
              data.regions[key].coeff = data.regions[key].percent * 100 + "%";
              return data.regions[key];
          });
          reportSupportCountryDataTable = $('#support-country-table').DataTable({
            data: regionsList,
              destroy: true,
              columns: [
                  { "data": "name", "title": "Region name"},
                  { "data": "count", "title": "Supported users"},
                  { "data": "coeff", "title": "Percentage"}
              ],
              "paging":   true,
              "iDisplayLength": 50,
              "info":     false,
              "dom": "tip"
          });
          $('.table-controls.support-country-controls').removeClass('hidden');
          reportSupportDataTable = $('#support-table').DataTable({
              data: data.rows,
              destroy: true,
              columns: [
                  { "data": "user", "title": "User name"},
                  { "data": "status", "title": "Status"},
                  { "data": "sku", "title": "Application", "render": skuApp, "visible": extended},
                  { "data": "autorenew", "title": "Autorenew", "visible": extended},
                  { "data": "regionName", "title": "Region", "visible": extended},
              ],
              "paging":   true,
              "ordering": true,
              "iDisplayLength": 50,
              "info":     false,
              "searching": true,
              "dom": "tip"
          });
          $('.table-controls.support-controls').removeClass('hidden');
          setSupportersOverviewHint();
    });
  }
  
  
  var reportUserDataTable;
  function updateUserRankingByMonth() {
    if(reportUserDataTable) {
      reportUserDataTable.destroy();
    }
    $('#users-ranking').text("Select region to see user statistics ");
  
    if(region.length > 0 ) {
      $.ajax({
          url: "reports/query_report.php?report=ranking_users_by_month&month="+mid+"&region="+region, 
          async: true
        }).done(function(res) {
          var data = jQuery.parseJSON( res );
          $('#users-ranking').text("Ranking of contributors");
          reportUserDataTable = $('#users-table').DataTable({
              data: data.rows,
              destroy: true,
              columns: [
                  { "data": "rank", title: "Region rank"},
                  { "data": "grank", title: "World rank"},
                  { "data": "user", title: "User name"},        
                  { "data": "changes", title: "Region changes"},
                  { "data": "globalchanges", title: "All changes"}
              ],
              "paging":   true,
              "ordering": true,
              "iDisplayLength": 50,
              "info":     false,
              "searching": true,
              "dom": 'tip'
          });
          $('.table-controls').removeClass('hidden');
      });
    }
  }
  
  var reportDataTable;
  function updateRankingByMonth() {
    if(reportDataTable) {
      reportDataTable.destroy();
    }
    $('#report-ranking').empty();
  
    $.ajax({
        url: "reports/query_report.php?report=ranking_by_month&month="+mid+"&region="+region, 
        async: true
      }).done(function(res) {
        var data = jQuery.parseJSON( res );
        $('#report-ranking').html("Ranking of contributors by " + data.rows.length + " groups <span>(made more than 3 changes)</span>");
        reportDataTable = $('#report-table').DataTable({
            data: data.rows,
            destroy: true,
            columns: [
  
                { "data": "rank", title: "Rank"},
                { "data": "countUsers", title: "Contributors <span>in group</span>"},
                { "data": "minChanges", title: "Minimum changes <span>in group</span>"},
                { "data": "maxChanges", title: "Maximum changes <span>in group</span>"},
                { "data": "avgChanges", title: "Average changes <span>in group</span>", render:floatFormat}
            ],
            "paging":   false,
            "ordering": true,
            //"iDisplayLength": 20,
            "info":     false,
            "searching": false,
        });
    });
  }
  
  function formatYearMonthHuman(year, month) {
    var monthNames = ["January", "February", "March", "April", "May", "June",
          "July", "August", "September", "October", "November", "December"];
    return monthNames[month - 1] + " " + year;
  }
  
  function formatYearMonth(year, month) {
    if(month < 10) {
      return year +"-0" +month;
    } else {
      return year +"-" +month;
    }
  }
  
  function updateGeneralInfo() {
    $("#general-info").html("<h2>About OSM Live</h2>" + 
      "<p>OsmAnd heavily relies on OSM and its community. Honestly saying, OsmAnd wouldn't exist without that great community. "+
      "When we started implementation OSM Live, we immediately decided that it should not be only a paid service, but a donation service as well. " +
      "Thinking that OSM Live is only possible because thousands of edits every hour in many places of the world, we want to distribute a part of the income between OSM editors.</p>" +
      "<h3>How it works</h3><ul>" +
      "<li> Every OSM contributor can be registered as a recipient. He just need to provide a valid Bitcoin address in the form below. " +
      "<li> Every OsmAnd user who wants to get live updates needs to subscribe to that service. " +
      "<li> After Google and Bank deductions the whole sum is split into 2 parts (<strong>30% OsmAnd</strong> and <strong>70% Donations</strong>)"+
      "<li> All donations are exchanged into Bitcoin and distributed between OSM contributors according to their ranking."+
      "<li> Every OsmAnd user can select preferred donation region, in that case <strong>50% of donation</strong> will be distributed between editors of this region."+
      "</ul><br> Please find all rankings and formulas in the reports on OSM Live.")
  }
  
  function handleRegisterOsm() {
  
    $( "#register_osm" ).submit(function( event ) {
        event.preventDefault();
          if($("#bitcoin_addr").val() == "") {
            $("#osm_register_failed").html("Please specify correct bitcoin address");
            $("#osm_register_failed").fadeIn(100);
            return;
          }
          if($("#email").val() == "") {
            $("#osm_register_failed").html("Please specify correct email address");
            $("#osm_register_failed").fadeIn(100);
            return;
          }
  
        $.post("subscription/register_osm.php", $("#register_osm").serialize(), function(res) {
            if (res == "OK") {
              $("#osm_register_success").fadeIn(100);
            }
            $("#osm_register_failed").html(res);
            $("#osm_register_failed").fadeIn(100);
            var data = jQuery.parseJSON( res );
            if (data.error) {
              $("#osm_register_failed").fadeIn(100);
              $("#osm_register_failed").html(data.error);
            } else {
              $("#osm_register_failed").fadeOut(0);
              $("#osm_register_success").fadeIn(100); 
            }
           
        });
    });
  }
  
  function selectProperTab() {
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    } 
  }
  $(document).ready(function(){
    var currentTime = new Date();
    var month = currentTime.getMonth() + 1;
    var day = currentTime.getDate();
    var year = currentTime.getFullYear();
    mid = formatYearMonth(year, month);
    for(yi = 2015; yi <= year; yi++) {
      stmonth = yi == 2015? 8 : 1;
      endmonth = yi == year? month : 12;
      for(mi = stmonth; mi <= endmonth; mi++) {
        $("#month-selection").prepend("<option value='"+formatYearMonth(yi,mi)+"'"+((mi==endmonth&&yi==year)?' selected':'')+">"+formatYearMonthHuman(yi,mi)+"</option>");
      }
    }
    for(yi = 2016; yi <= year; yi++) {
      stmonth = yi == 2016? 1 : 1;
      endmonth = yi == year? month : 12;
      for(mi = stmonth; mi <= endmonth; mi++) {
        $(".osm-live-month-select").prepend("<option value='"+formatYearMonth(yi,mi)+"'"+((mi==endmonth&&yi==year)?' selected':'')+">"+formatYearMonthHuman(yi,mi)+"</option>");
      }
    }
    if(typeof(Storage) !== "undefined") {
        if(sessionStorage.supportMonth) {
            supportMonth = sessionStorage.supportMonth;
            supportMonthName = sessionStorage.supportMonthName;
            $("#donate-month-selection").val(supportMonth);
        }
        if(sessionStorage.recipientMonth) {
            recipientMonth = sessionStorage.recipientMonth;
            recipientMonthName = sessionStorage.recipientMonthName;
            $("#recipient-month-selection").val(recipientMonth);
        }
        if(sessionStorage.recipientRegion) {
            recipientRegion = sessionStorage.recipientRegion;
            recipientRegionName = sessionStorage.recipientRegionName;
            $("#recipient-region-selection").val(recipientRegion);
        }
  
        if(sessionStorage.month) {
            mid = sessionStorage.month;
            midName = sessionStorage.monthName;
            $("#month-selection").val(mid);
        }
        if(sessionStorage.region) {
            region = sessionStorage.region;
            regionName = sessionStorage.regionName;
            $("#region-selection").val(region);
        }
    }
  
    
    handleRegisterOsm();
    updateRegions();
    updateGeneralInfo();
    updateSupportByMonth();
    updateRecipientsByMonth();
    
    updateTotalChanges();
    updateRankingByMonth();
    updateUserRankingByMonth();
    
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        /*var target = $(e.target).attr("href") // activated tab
        window.location.hash = target;*/
        e.preventDefault();
        return false;
    });
    window.onpopstate = function(event) {
      selectProperTab();
    };
    selectProperTab();
  
    $('#donate-month-selection').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        supportMonth = this.value;
        supportMonthName = optionSelected.text();
        if(typeof(Storage) !== "undefined") {
          sessionStorage.supportMonth = supportMonth;
          sessionStorage.supportMonthName = supportMonthName;
        }
        updateSupportByMonth();
    });
    $('#recipient-month-selection').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        recipientMonth = this.value;
        recipientMonthName = optionSelected.text();
        if(typeof(Storage) !== "undefined") {
          sessionStorage.recipientMonth = recipientMonth;
          sessionStorage.recipientMonthName = recipientMonthName;
        }
        updateRecipientsByMonth();
    });
    $('#recipient-region-selection').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        recipientRegion = this.value;
        recipientRegionName = optionSelected.text();
        if(typeof(Storage) !== "undefined") {
          sessionStorage.recipientRegion = recipientRegion;
          sessionStorage.recipientRegionName = recipientRegionName;
        }
        updateRecipientsByMonth();
      });
    
    $('#month-selection').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        mid = this.value;
        midName = optionSelected.text();
        if(typeof(Storage) !== "undefined") {
          sessionStorage.month = mid;
          sessionStorage.monthName = midName;
        }
        updateTotalChanges();
        updateRankingByMonth();
        updateUserRankingByMonth();
    });
  
    $('#region-selection').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        region = this.value;
        regionName = optionSelected.text();
        if(typeof(Storage) !== "undefined") {
          sessionStorage.region = region;
          sessionStorage.regionName = regionName;
        }
        
        updateTotalChanges();
        updateRankingByMonth();
        updateUserRankingByMonth();
      });
    
     
  });

  function setContributorsOverviewHint() {
    if ($('.overview-hint').is(':visible')) {
      var currentMonth  = $("#month-selection").children("option").filter(":selected").text(),
          currentRegion = $("#region-selection").children("option").filter(":selected").text()
      $('#overview-contributors_options').text(currentMonth + ', ' + currentRegion);
    }
  }

  function setSupportersOverviewHint() {
    if ($('.overview-hint').is(':visible')) {
      var currentMonth  = $("#donate-month-selection").children("option").filter(":selected").text();
      $('#overview-supporters_options').text(currentMonth);
    }
  }

  $('#users-table-search').on('keyup', function() {
    reportUserDataTable.search(this.value).draw();
  });

  $('#users-table-select').on('change', function() {
    reportUserDataTable.page.len(this.value).draw();
  });

  $('#support-country-table-search').on('keyup', function() {
    reportSupportCountryDataTable.search(this.value).draw();
  });

  $('#support-country-table-select').on('change', function() {
    reportSupportCountryDataTable.page.len(this.value).draw();
  });

  $('#support-table-search').on('keyup', function() {
    reportSupportDataTable.search(this.value).draw();
  });

  $('#support-table-select').on('change', function() {
    reportSupportDataTable.page.len(this.value).draw();
  });

  $('#recipients-table-search').on('keyup', function() {
    reportRecipientsDataTable.search(this.value).draw();
  });

  $('#recipients-table-select').on('change', function() {
    reportRecipientsDataTable.page.len(this.value).draw();
  });
  
</script>
</body>
</html>
