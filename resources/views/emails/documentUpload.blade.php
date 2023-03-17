
<!DOCTYPE html>
<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style>
body{ margin: 0; padding: 0; }
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap");
body, td {font-family: "Open Sans", sans-serif!important;}
</style>

<div style="width: 100%; max-width: 600px;min-width:260px; font-family: Open Sans, sans-serif!important; background-color: #ededed; padding: 25px 25px 25px 25px; box-sizing: border-box;">
    <div style="padding:40px 10px 40px 10px; background-color: #3d66fe; font-weight: 600; font-size: 1.5em; color: #ffffff; text-align: center; text-transform: uppercase;">Welcome to Oysterchecks</div>
      <div style="width: 100%; max-width: 100%; margin: auto; padding: 0 25px 25px 25px; background-color: #ffffff; box-sizing: border-box;">
        <div style="padding: 40px 0 0 0; box-sizing: border-box;">
          <p style="margin: 0; padding: 0 0 10px 0; font-size:1em; line-height: 20px; color: #555555; box-sizing: border-box;">Hi {{$data['name']}}</p>

            <p style="margin: 0;padding: 0 0 20px 0; font-size:1em; line-height: 20px; color: #555555;">Congratulations on your new role, and welcome to your Pre-Employment Screening (PES) process.</p>

            <p style="margin: 0;padding: 0 0 20px 0; font-size:1em; line-height: 20px; color: #555555;">As you are aware, your recent offer requires you to undergo specific background checks before you can start in your new role. As your first step, please click the button below to complete your online PES form.</p>

            <div style="text-align: center; padding: 0 0 10px 0;">

                <a href="{{route('candidate.FileUpload')}}" style="display: inline-block; padding: 15px 10px 15px 10px; background-color: #f13f61; font-weight: 600; font-size: 1.2em; color: #ffffff; text-align: center; text-transform: uppercase; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; -o-border-radius: 3px; text-decoration: none; min-width: 200px;">Submit Form</a>
            </div>

            <p style="margin: 0;padding: 10px 0 10px 0; font-size:1em; line-height: 20px; color: #555555;">Completion is due within 24 hours to avoid a delay to your start date.</p>

            <p style="margin: 0;padding: 0 0 10px 0; font-size:1em; line-height: 20px; color: #555555;"> In the next business day, your personal PES coordinator will send you an introductory email with their information, detailing the rest of the required steps in the process.</p>

            <p style="margin: 0;padding: 0 0 10px 0; font-size:1em; line-height: 20px; color: #555555;"> If you have any questions in the meantime, please do not hesitate to contact us at <strong>+23417001770, +441977310180</strong>. We’re looking forward to working with you.</p>

            <p style="margin: 0;padding: 0 0 40px 0; font-size:1em; line-height: 20px; color: #555555;"> <strong>Please see below for some tips to help guide you through the Pre-Employment Screening (PES) process:</strong></p>
        </div>

        <div style="text-align:center;">
            <div style="display:inline-block; width:32%; min-width:120px; max-width:100%; width:-webkit-calc(230400px - 48000%); min-width:-webkit-calc(32%); width:calc(230400px - 48000%); min-width:calc(32%); padding-bottom:5px; ">

                <div style="text-align:center; background:#f2f2f2; vertical-align:top;">

                    <div style="padding: 20px 2px 20px 2px; background-color: #644be1; font-weight: 600; font-size: 1em; color: #ffffff;">Be Consistent</div>


                    <p style="height: 180px; overflow-x: auto;font-size: 0.9em; line-height: 1.5em; color: #000000; margin: 0; padding: 0 10px 0 10px;">We will compare your references &amp; application to your CV to ensure all information matches. If there are discrepancies, it will delay the process &amp; require you to submit additional information</p>
                </div>
            </div>

            <div style="display:inline-block; width:32%; min-width:120px; max-width:100%; width:-webkit-calc(230400px - 48000%); min-width:-webkit-calc(32%); width:calc(230400px - 48000%); min-width:calc(32%); padding-bottom:5px;">

                <div style="text-align:center; background:#f2f2f2; vertical-align:top;">

                    <div style="padding: 20px 2px 20px 2px; background-color: #c9439f; font-weight: 600; font-size: 1em; color: #ffffff;">Be Accurate</div>

                    
                    <p style="height: 180px; overflow-x: auto;font-size: 0.9em; line-height: 1.5em; color: #000000; margin: 0; padding: 0 10px 0 10px;">While it may be time consuming, taking an extra few minutes to ensure all data entered is accurate will save us from having to bother you throughout the process or having to delay your start date</p>
                </div>
            </div>

            <div style="display:inline-block; width:32%; min-width:120px; max-width:100%; width:-webkit-calc(230400px - 48000%); min-width:-webkit-calc(32%); width:calc(230400px - 48000%); min-width:calc(32%); padding-bottom:5px;">

                <div style="text-align:center; background:#f2f2f2; vertical-align:top;">

                    <div style="padding: 20px 2px 20px 2px; background-color: #fd6660; font-weight: 600; font-size: 1em; color: #ffffff;">Stay in Touch</div>


                    <p style="height: 180px; overflow-x: auto;font-size: 0.9em; line-height: 1.5em; color: #000000; margin: 0; padding: 0 10px 0 10px;">We will email you throughout the process as required. We ask that you reply to any requests swiftly to ensure you can start on the proposed start date</p>
                </div>
            </div>
        </div>


        <div style="text-align:center; padding: 10px 0 0 0;">
            <div style="display:inline-block; width:32%; min-width:120px; max-width:100%; width:-webkit-calc(230400px - 48000%); min-width:-webkit-calc(32%); width:calc(230400px - 48000%); min-width:calc(32%); padding-bottom:5px; ">

                <div style="text-align:center; background:#f2f2f2; vertical-align:top;">

                    <div style="padding: 20px 2px 20px 2px; background-color: #644be1; font-weight: 600; font-size: 1em; color: #ffffff;">Cover Gaps /<br> Contingent</div>

                    <p style="height: 180px; overflow-x: auto;font-size: 0.9em; line-height: 1.5em; color: #000000; margin: 0; padding: 0 10px 0 10px;">We will compare your references &amp; application to your CV to ensure all information matches. If there are discrepancies, it will delay the process &amp; require you to submit additional information</p>
                </div>
            </div>

            <div style="display:inline-block; width:32%; min-width:120px; max-width:100%; width:-webkit-calc(230400px - 48000%); min-width:-webkit-calc(32%); width:calc(230400px - 48000%); min-width:calc(32%); padding-bottom:5px;">

                <div style="text-align:center; background:#f2f2f2; vertical-align:top;">

                    <div style="padding: 20px 2px 20px 2px; background-color: #c9439f; font-weight: 600; font-size: 1em; color: #ffffff;">Provide <br>Duplicates</div>

                    <p style="height: 180px; overflow-x: auto;font-size: 0.9em; line-height: 1.5em; color: #000000; margin: 0; padding: 0 10px 0 10px;">While it may be time consuming, taking an extra few minutes to ensure all data entered is accurate will save us from having to bother you throughout the process or having to delay your start date</p>
                </div>
            </div>

            <div style="display:inline-block; width:32%; min-width:120px; max-width:100%; width:-webkit-calc(230400px - 48000%); min-width:-webkit-calc(32%); width:calc(230400px - 48000%); min-width:calc(32%); padding-bottom:5px;">

                <div style="text-align:center; background:#f2f2f2; vertical-align:top;">

                    <div style="padding: 20px 2px 20px 2px; background-color: #fd6660; font-weight: 600; font-size: 1em; color: #ffffff;">Provide <br>Documents</div>
                    <p style="height: 180px; overflow-x: auto;font-size: 0.9em; line-height: 1.5em; color: #000000; margin: 0; padding: 0 10px 0 10px;">We will email you throughout the process as required. We ask that you reply to any requests swiftly to ensure you can start on the proposed start date</p>
                </div>
            </div>
        </div>

        <div style="padding: 40px 0 0 0;">
            <p style="margin: 0;padding: 0 0 20px 0; font-size:1em; line-height: 20px; color: #555555;">-- Imogen Whelan PES Coordinator</p>

            <p style="margin: 0;padding: 0 0 20px 0; font-size:1em; line-height: 20px; color: #555555;">Tel: +23417001770, +441977310180</p>

            <p style="margin: 0;padding: 0 0 20px 0; font-size:1em; line-height: 20px; color: #555555;">Oysterchecks</p>

            <p style="margin: 0;padding: 0 0 20px 0; font-size:1em; line-height: 20px; color: #555555;">The information contained in this email message is intended only for use of the individual named above. If you have received this communication in error, please notify us immediately by email , and delete all copies of the original message. Thank you.</p>
        </div>
    </div>
</div>

</body>
</html>