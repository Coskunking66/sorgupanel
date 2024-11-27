<?php
include_once "../server/rolecontrol.php";
$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link rel="icon" href="/assets/images/siber.png" type="image/x-icon" />',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'

);

$page_title = 'Kimlik Arşivi';
include 'excode31.php';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

error_reporting(0);

?>

<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kimlik Arşivi</h4>
                    <p class="mb-1">
                    <p>
                        Uygun bulduğunuz kimlik görselinin altındaki "Resimi İndir" butonuna tıklayarak indirebilirsiniz.</br>
                    </p>
                    </p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                            
                           
                            <div class="table-responsive">
                                <div class="uzunluk">
                                <img src="admin/kimlikler/excode (1).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (1).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (2).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (2).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (3).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (3).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (4).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (4).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (5).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (5).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (7).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (7).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (8).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (8).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (9).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (9).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (10).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (10).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (11).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (11).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (12).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (12).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (13).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (13).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (14).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (14).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (15).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (15).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (16).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (16).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (17).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (17).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (18).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (18).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (19).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (19).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (20).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (20).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (21).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (21).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (22).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (22).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (23).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (23).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (24).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (24).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (25).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (25).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (26).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (26).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (27).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (27).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (28).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (28).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (29).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (29).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (30).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (30).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (31).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (31).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (32).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (32).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (33).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (33).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (34).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (34).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (35).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (35).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (36).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (36).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (37).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (37).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (38).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (38).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (39).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (39).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (40).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (40).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (41).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (41).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (42).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (42).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (43).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (43).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (44).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (44).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (45).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (45).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (46).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (46).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (47).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (47).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (48).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (48).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (49).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (49).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (50).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (50).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (51).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (51).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (52).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (52).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (53).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (53).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (54).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (54).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (55).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (55).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (56).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (56).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (57).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (57).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (58).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (58).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (59).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (59).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (60).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (60).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (61).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (61).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (62).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (62).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (63).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (63).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (64).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (64).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (65).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (65).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (66).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (66).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (67).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (67).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (68).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (68).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (69).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (69).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (70).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (70).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (71).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (71).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (72).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (72).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (73).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (73).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (74).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (74).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (75).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (75).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (76).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (76).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (77).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (77).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (78).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (78).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (79).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (79).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (80).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (80).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (81).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (81).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (82).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (82).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (83).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (83).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (84).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (84).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (85).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (85).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (86).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (86).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (87).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (87).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (88).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (88).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (89).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (89).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (90).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (90).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (91).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (91).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (92).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (92).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (93).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (93).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (94).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (94).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (95).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (95).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (96).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (96).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (97).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (97).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (98).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (98).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (99).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (99).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (100).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (100).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (101).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (101).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (102).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (102).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (103).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (103).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (104).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (104).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (105).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (105).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (106).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (106).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (107).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (107).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (108).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (108).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (109).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (109).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (110).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (110).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (111).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (111).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (112).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (112).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (113).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (113).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (114).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (114).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (115).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (115).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (116).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (116).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (117).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (117).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (118).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (118).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (119).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (119).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (120).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (120).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (121).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (121).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (122).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (122).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (123).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (123).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (124).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (124).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (125).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (125).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (126).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (126).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (127).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (127).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (128).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (128).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (129).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (129).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (130).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (130).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/excode (131).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/excode (131).jpeg" download>Resimi İndir</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<style>
    
.a {
    width: %20;
    font-family: impact;
    background-color: #fff;
    border-color: #fff;
    color: #fff;
    font-size:15px;
}


</style>
<style>
body {

}
</style>


    </div>
    <!--BİTİŞ-->
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>
