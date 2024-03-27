<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>দরপত্র তফসিল</title>
</head>

<body style="margin: 0; padding: 0">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0 !important">
        <tbody style="border-spacing: 0 !important;font-size: 12px;">
            <tr>
                <td width="100%" valign="top" bgcolor="#eeeeee" height="20"></td>
            </tr>
            <tr>
                <td bgcolor="#eeeeee" style="padding: 0px 0px">
                    <table width="100%"
                        style="
                max-width: 800px;
                text-align: center;
                border: 0;
                background-color: #ffffff;
                border-spacing: 0 !important;
                padding: 0;
                margin: 0 auto;

              ">

                        {{ $participate->title }}
                        <tr>
                            <td
                                style="border-bottom: 1px solid #000; padding-bottom: 5px; display: flex; justify-content: center;">
                                <table cellpadding="0" cellspacing="0" style="padding: 0;margin: 0;">
                                    <tr>
                                        <td style="padding: 0;width: 100%;">
                                            <div>
                                                <h2 style="padding: 0;margin: 0 0 5px 0;font-size: 18px;">রামগঞ্জ পৌরসভা
                                                    কার্যালয়</h2>
                                                <h3 style="font-size: 18px; margin: 0;">রামগঞ্জ , লক্ষ্মীপুর ।</h3>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="left" cellpadding="0" cellspacing="0"
                                    style="width: 100%;padding: 0;margin: 0;">
                                    <tr>
                                        <td style="padding-top: 20px;">
                                            <span
                                                style="border: 3px double #000;padding: 8px 20px;font-size: 20px; font-weight: 700;">"দরপত্র
                                                তফসিল"</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Arial, sans-serif;text-align: left;">
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%"
                                                align="left">
                                                <tr>
                                                    <td style="text-align: left; padding-top: 10px;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>০১। মহালের নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 400px; padding-left: 5px;">{{ $participate->palace_name }}
                                                                </span>
                                                                <span>অবস্থানঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 240px;padding-left: 5px;">
                                                                    {{ $participate->location }}</span>
                                                            </div>
                                                            </p>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                                <span style="display: block;">০২। ১৪৩১ বাংলা সনের দরপত্র
                                                                    দাতা কর্তৃক ইজারা প্রদত্ত দরঃ</span>
                                                            <div style="margin: 10px 0;display: flex;">
                                                                <span>(অংকে)</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 750px;padding-left: 5px;">{{ $participate->lease_price_number }}</span>
                                                            </div>
                                                            <div style="display: flex;">
                                                                <span>(কথায়)</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 752px;padding-left: 5px;">{{ $participate->lease_price_text }}</span>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>০৩। বায়নার টাকার বিবরনঃ ব্যাংকের নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 550px;padding-left: 5px;">{{ $participate->bank_name }}</span>
                                                            </div>
                                                            <div
                                                                style="display: flex;flex-direction: column;align-items: flex-end; padding: 10px 10px 0 0;">
                                                                <div style="display: flex;margin-top: 10px;">
                                                                    <span>ড্রাফট নংঃ</span>
                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 345px;padding-left: 5px;">{{ $participate->draft_no }}</span>
                                                                    <span>তারিখঃ</span>
                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->pay_date }}</span>
                                                                </div>
                                                                <div style="margin-top: 10px;display: flex;">
                                                                    <span>টাকার পরিমানঃ</span>
                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 560px;padding-left: 5px;">{{ $participate->pay_amount }}</span>
                                                                </div>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                            <div>
                                                                <span>০৪। উৎস কর ও মূল্য সংযোজন কর বাবদ ইজারা মূল্যের
                                                                    ১০% ও ১৫%, মত=২৫% (শতকরা পঁচিশ ভাগ)</span>
                                                            </div>
                                                            <div
                                                                style="display: flex;flex-direction: column;align-items: flex-end; padding: 10px 10px 0 0;">
                                                                <div style="display: flex;">
                                                                    <span>ব্যাংকের নামঃ</span>
                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 575px;padding-left: 5px;">{{ $participate->ejara_bank_name }}</span>
                                                                </div>
                                                                <div style="display: flex;margin-top: 10px;">
                                                                    <span>ড্রাফট নংঃ</span>
                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 350px;padding-left: 5px;">{{ $participate->ejara_draft_no }}</span>
                                                                    <span>তারিখঃ</span>
                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->ejara_pay_date }}</span>
                                                                </div>
                                                                <div style="margin-top: 10px; display: flex;">
                                                                    <span>টাকার পরিমানঃ</span>

                                                                    <span
                                                                        style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 150px;padding-left: 5px;">{{ $participate->ejara_pay_amount }}</span>


                                                                </div>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                            <div style="padding-bottom: 15px;">
                                                                <span>০৫। বায়নার উপর ৫% (শতকরা পাঁচ ভাগ) ফেরত
                                                                    যোগ্য</span>
                                                            </div>
                                                            <table style="border-collapse: collapse; width: 100%">
                                                                <tr>
                                                                    <th
                                                                        style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2; text-align: center;">
                                                                        ব্যাংকের নাম</th>
                                                                    <th
                                                                        style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2; text-align: center;">
                                                                        সিডিআর/ড্রাফট নং</th>
                                                                    <th
                                                                        style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2; text-align: center;">
                                                                        টাকা</th>
                                                                </tr>
                                                                <tr>
                                                                    @php
                                                                        $refundableArray = json_decode(
                                                                            $participate->refundable,
                                                                            true,
                                                                        );
                                                                    @endphp
                                                                    <td
                                                                        style="border: 1px solid #000; padding: 8px; text-align: left;">
                                                                        @if (!empty($refundableArray['bank_name']))
                                                                            {{ $refundableArray['bank_name'] }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        style="border: 1px solid #000; padding: 8px; text-align: left;">
                                                                        @if (!empty($refundableArray['draft_no']))
                                                                            {{ $refundableArray['draft_no'] }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        style="border: 1px solid #000; padding: 8px; text-align: left;">
                                                                        @if (!empty($refundableArray['amount']))
                                                                            {{ $refundableArray['amount'] }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                            <div style="padding-bottom: 15px;">
                                                                <span>০৬। সিডিউল মূল্য (অফেরতযোগ্য)</span>
                                                            </div>
                                                            <table style="border-collapse: collapse; width: 100%">
                                                                <tr>
                                                                    <th
                                                                        style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2; text-align: center;">
                                                                        ব্যাংকের নাম</th>
                                                                    <th
                                                                        style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2; text-align: center;">
                                                                        সিডিআর/ড্রাফট নং</th>
                                                                    <th
                                                                        style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2; text-align: center;">
                                                                        টাকা</th>
                                                                </tr>
                                                                <tr>
                                                                    @php
                                                                        $schedule_price = json_decode(
                                                                            $participate->schedule_price,
                                                                            true,
                                                                        );
                                                                    @endphp
                                                                    <td
                                                                        style="border: 1px solid #000; padding: 8px; text-align: left;">
                                                                        @if (!empty($schedule_price['draft_no']))
                                                                            {{ $schedule_price['draft_no'] }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        style="border: 1px solid #000; padding: 8px; text-align: left;">
                                                                        @if (!empty($schedule_price['draft_no']))
                                                                            {{ $schedule_price['draft_no'] }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        style="border: 1px solid #000; padding: 8px; text-align: left;">
                                                                        @if (!empty($schedule_price['amount']))
                                                                            {{ $schedule_price['amount'] }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 140%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>০৭। দর দাতার নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000; min-width: 400px;padding-left: 5px;">{{ $participate->bidder_name }}</span>
                                                                <div>
                                                                    <span style="padding:0 5px;">মোবাইল নং-</span>
                                                                    <span>
                                                                        {{ $participate->bidder_number }}
                                                                    </span>
                                                                </div>

                                                            </div>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 140%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>০৮। পিতার নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 400px;padding-left: 5px;">{{ $participate->bidder_father_name }}</span>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 140%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>০৯। মাতার নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 400px;padding-left: 5px;">{{ $participate->bidder_mother_name }}</span>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 180%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>১০। (ক) বর্তমান ঠিকানাঃ গ্রামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 350px;padding-left: 5px;">{{ $participate->a_village }}</span>
                                                                <span>ডাকঘরঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->a_post }}</span>
                                                            </div>
                                                            <div style="display: flex; padding:10px 0 0 45px;">
                                                                <span>উপজেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 300px;padding-left: 5px;">{{ $participate->a_upazila }}</span>
                                                                <span>জেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->a_district }}</span>
                                                            </div>
                                                            <div style="display: flex; padding:10px 0 0 25px;">
                                                                <span>(খ) স্থায়ী ঠিকানাঃ গ্রামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 350px;padding-left: 5px;">{{ $participate->b_village }}</span>
                                                                <span>ডাকঘরঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_post }}</span>
                                                            </div>
                                                            <div style="display: flex; padding:10px 0 0 45px;">
                                                                <span>উপজেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 300px;padding-left: 5px;">{{ $participate->b_upazila }}</span>
                                                                <span>জেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_district }}</span>
                                                            </div>
                                                            </p>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div style="line-height: 140%;">
                                                            <p>
                                                            <div style="display: flex;">
                                                                <span>১১। স্বাক্ষীর নামঃ (১)</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 350px;padding-left: 5px;"></span>
                                                                <span>(২)</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;"></span>
                                                            </div>
                                                            <div style="display: flex; padding:15px 0 0 45px;">
                                                                <span>পিতার নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 300px;padding-left: 5px;">{{ $participate->a_witness_father_name }}</span>
                                                                <span>পিতার নামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_witness_father_name }}</span>
                                                            </div>

                                                            <div style="display: flex; padding:15px 0 0 45px;">
                                                                <span>গ্রামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 350px;padding-left: 5px;">{{ $participate->a_witness_village }}</span>
                                                                <span>গ্রামঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_witness_village }}</span>
                                                            </div>
                                                            <div style="display: flex; padding:15px 0 0 45px;">
                                                                <span>ডাকঘরঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 300px;padding-left: 5px;">{{ $participate->a_witness_post }}</span>
                                                                <span>ডাকঘরঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_witness_post }}</span>
                                                            </div>
                                                            <div style="display: flex; padding:15px 0 0 45px;">
                                                                <span>উপজেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 300px;padding-left: 5px;">{{ $participate->a_witness_upazila }}</span>
                                                                <span>উপজেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_witness_upazila }}</span>
                                                            </div>
                                                            <div style="display: flex; padding:15px 0 0 45px;">
                                                                <span>জেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 300px;padding-left: 5px;">{{ $participate->a_witness_district }}</span>
                                                                <span>জেলাঃ</span>
                                                                <span
                                                                    style="border-bottom: 1px dotted #000;flex-grow: 1; min-width: 200px;padding-left: 5px;">{{ $participate->b_witness_district }}</span>
                                                            </div>
                                                            </p>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right;">
                                                        <div style="line-height: 140%;">
                                                            <p>
                                                            <div style="padding: 10px 0 50px 0;">
                                                                <span>দরদাতার স্বাক্ষর ও সীল (যদি থাকে)</span>
                                                            </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
        </tbody>
    </table>

</body>

</html>
