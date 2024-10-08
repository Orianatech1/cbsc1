@extends('layout.main')

@section('main-content')


<style>
    .sl{
        width: 100px;
    }
    td{
        text-align: center;
    }
</style>

<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3>MANDATORY PUBLIC DISCLOSURE</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home /</a></li>
                <li>About / MANDATORY PUBLIC DISCLOSURE</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<!-- Blog Post Start here -->
<section class="blog-post padding-120">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="single-post ">








                    <div class="post-content">
                        <h3>A. GENERAL INFORMATION:</h3>
                        <p>
                        <table border="1">
                            <tbody>
                                <tr>
                                    <td class="sl">SL NO.</td>
                                    <td>INFORMATION</td>
                                    <td>DETAILS</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>NAME OF THE SCHOOL</td>
                                    <td>Pune Cambridge Public School, Ambegaon</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>AFFILIATION NO</td>
                                    <td>UDISE - 27251600131</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SCHOOL CODE</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>COMPLETE ADDRESS</td>
                                    <td>Pune Cambridge Public School, Sr. No 28. Jijamata chowk, Behind Ambegaon Pathar
                                        Police Chowki, Ambegaon Pathar- Pune 411046</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PRINCIPAL NAME</td>
                                    <td>Yeshwant B. Chitalkar</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>PRINCIPAL QUALIFICATION</td>
                                    <td>M.A. B.ED, DSM, MBA</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>SCHOOL E-MAIL ID</td>
                                    <td><a href="mailto:pcpscbseambegaon@gmail.com">pcpscbseambegaon@gmail.com</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>CONTACT DETAILS</td>
                                    <td> 020 - 24363600 / 34363300, 9011032856</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>














                    <div class="post-content">
                        <h3>B. DOCUMENTS AND INFORMATION</h3>
                        <p>
                        <table border="1" cellspacing="0" style="width:100%">
                            <tbody>
                                <tr>
                                    <td class="sl"><strong>SL NO.</strong></td>
                                    <td>
                                        <p><strong>DOCUMENTS AND INFORMATION</strong></p>
                                    </td>
                                    <td><strong>Attachment</strong></td>
                                </tr>
                                {{-- <tr>
                                    <td>1</td>
                                    <td>
                                        <p>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION,
                                            IF ANY</p>
                                    </td>
                                    <td><a href="pdf/staff.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr> --}}
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <p>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS
                                            APPLICABLE</p>
                                    </td>
                                    <td><a href="pdf/trust registration1.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <p>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE BY THE STATE
                                            GOVT./UT</p>
                                    </td>
                                    <td><a href="pdf/CBSE NOC2.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <p>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT&#39;S RENEWAL
                                            IF APPLICABLE</p>
                                    </td>
                                    <td><a href="pdf/Namun 3.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <p>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                                        </p>
                                    </td>
                                    <td><a href="pdf/building safty4.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <p>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</p>
                                    </td>
                                    <td><a href="pdf/Fire Saefty Certificate5.pdf"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                {{-- <tr>
                                    <td>7</td>
                                    <td>
                                        <p>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR
                                            AFFILIATION/UPGRADATION/ EXTENSION OF AFFILIATION OR SELF CERTIFIVATION BY
                                            SCHOOL</p>
                                    </td>
                                    <td><a href="pdf/staff.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr> --}}
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <p>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</p>
                                    </td>
                                    <td><a href="pdf/Safe Drinking Water6.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>LAND CERTIFICATE</td>
                                    <td><a href="pdf/land certificate7.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>COPY OF SELF CERTIFICATION</td>
                                    <td><a href="pdf/Self Certification Proforma8.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>














                    <div class="post-content">
                        <h3>C: ACADEMICS DOCUMENTS INFORMATION</h3>
                        <p>
                        <table border="1" style="width:100%">
                            <tbody>
                                <tr>
                                    <td class="sl"><strong>SL NO.</strong></td>
                                    <td><strong>DOCUMENTS/ INFORMATION</strong></td>
                                    <td><strong>Attachments</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>1</strong></td>
                                    <td>FEE STRUCTURE OF THE SCHOOL</td>
                                    <td><a href="pdf/Fee Structure .pdf"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><strong>2</strong></td>
                                    <td>ANNUAL ACADEMIC CALENDER</td>
                                    <td><a href="pdf/PCPS ANNUAL CALENDER.pdf"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><strong>3</strong></td>
                                    <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                    <td><a href="pdf/School Managing Committee.pdf"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><strong>4</strong></td>
                                    <td>LIST OF PARENTS TEACHERS ASSOCIATION EPTA MEMBERS</td>
                                    <td><a href="pdf/Parent Teacher Association.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                {{-- <tr>
                                    <td>5</td>
                                    <td>LAST THREE YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</td>
                                    <td><a href="pdf/staff.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a>
                                    </td>
                                </tr> --}}
                                <tr>
                                    <td>6</td>
                                    <td>WOMEN&#39;S GRIEVANCE REDRESSAL COMMITTEE</td>
                                    <td><a href="pdf/womengray.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>POCSO</td>
                                    <td><a href="pdf/pocso.pdf" target="_blank"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>














                    {{-- <div class="post-content">
                        <h3>D: STAFF (TEACHING)</h3>
                        <p>
                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <table border="1" cellpadding="1" cellspacing="0" style="width:100%">
                            <tbody>
                                <tr>
                                    <td class="sl">
                                        <p>SL NO.</p>
                                    </td>
                                    <td>
                                        <p>INFORMATION</p>
                                    </td>
                                    <td>
                                        <p>DETAILS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
                                    </td>
                                    <td>
                                        <p>PRINCIPAL</p>
                                    </td>
                                    <td>
                                        <p>Mr. Yeshwant B.Chitalkar<br />
                                            M.A. B.Ed.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><br />
                                            2</p>
                                    </td>
                                    <td>
                                        <p>TOTAL NO. OF TEACHRES</p>
                                    </td>
                                    <td>
                                        <p>91</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>PGT</p>
                                    </td>
                                    <td>
                                        <p>07</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>TGT</p>
                                    </td>
                                    <td>
                                        <p>35</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>PRT</p>
                                    </td>
                                    <td>
                                        <p>35</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2</p>
                                    </td>
                                    <td>
                                        <p>TEACHERS SECTION RATIO</p>
                                    </td>
                                    <td>
                                        <p>1.5</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <p>DETAILS OF SPECIAL EDUCATOR</p>
                                    </td>
                                    <td>
                                        <p>DR. KUNJIR SIR</p>

                                        <p>&nbsp;</p>

                                        <p>M.B.B.S.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>5</p>
                                    </td>
                                    <td>
                                        <p>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</p>
                                    </td>
                                    <td>
                                        <p>MR. MAYUR SIR&nbsp; , B.E. CIVIL&nbsp;</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p><br />
                            &nbsp;</p>
                        </p>
                    </div> --}}














                    {{-- <div class="post-content">
                        <h3>E: SCHOOL INFRASRTUCTURE:</h3>
                        <p>
                        <p>&nbsp;</p>

                        <table border="1" cellpadding="1" cellspacing="0" style="width:100%">
                            <tbody>
                                <tr>
                                    <td class="sl">
                                        <p>SL. NO.</p>
                                    </td>
                                    <td>
                                        <p>INFORMATION</p>
                                    </td>
                                    <td>
                                        <p>DETAILS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
                                    </td>
                                    <td>
                                        <p>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ MTR)</p>
                                    </td>
                                    <td>
                                        <p>15000 Sq mtr</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2</p>
                                    </td>
                                    <td>
                                        <p>NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)</p>
                                    </td>
                                    <td>
                                        <p>No. 90&nbsp;Class Rooms 650&nbsp;Sq. Mtr</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>&nbsp;</p>

                                        <p>3</p>
                                    </td>
                                    <td>
                                        <p>INTERNET FACILITY</p>
                                    </td>
                                    <td>
                                        <p>YES</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <p>NO. OF GIRLS TOILETS</p>
                                    </td>
                                    <td>
                                        <p>14</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>5</p>
                                    </td>
                                    <td>
                                        <p>NO. OF BOYS TIOLETS</p>
                                    </td>
                                    <td>
                                        <p>14</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p><br />
                            &nbsp;</p>
                        </p>
                    </div> --}}
















                    {{-- <div class="post-content">
                        <h3>SARAS 2023-2024</h3>
                        <p>
                        <table border="1">
                            <tbody>
                                <tr>
                                    <td class="sl">SL NO.</td>
                                    <td>INFORMATION</td>
                                    <td>DETAILS</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>SARAS 2023-2024</td>
                                    <td><a href="pdf/staff.pdf"><img src="img/pdf.svg" width="25px" alt=""></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div> --}}










                </div><!-- single post -->
            </div>

        </div>
    </div>
</section>
<!-- Blog Post End here -->

@endsection
