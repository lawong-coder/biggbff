
      <tr>
        <td align="center" style="padding:20px 23px 0 23px">
          <table width="600" style="background-color:#FFF; margin:0 auto; border-radius:5px; border-collapse:collapse">
            <tbody>
              <tr>
                <td align="center">
                  <table width="500" style="margin:0 auto">
                    <tbody>
                      <tr>
                        <td align="left" style="padding:15px 0 20px 0; font-family:'Roboto', Arial !important">
                          <?= $mail_templates ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td align="center" cellspacing="0" style="padding:0 0 30px 0; vertical-align:middle">
                  <table width="550" style="border-collapse:collapse; background-color:#FaFaFa; margin:0 auto; border:1px solid #E5E5E5">
                    <tbody>
                      <tr>
                        <td width="276" style="vertical-align:top; border-right:1px solid #E5E5E5">
                          <table style="width:100%; border-collapse:collapse">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top; padding:18px 18px 8px 23px; font-family:'Roboto', Arial !important">
                                  <p style="font-size:16px; color:#333333; text-transform:uppercase; font-weight:900; margin:0; font-family:'Roboto', Arial !important">
                                    MEMBERSHIP  Summary:
                                  </p>
                                </td>
                              </tr>
                              <tr style="">
                                <td style="vertical-align:top; padding:0 18px 18px 23px">
                                  <table width="100%" style="border-collapse:collapse">
                                    <tbody>
                                      <tr>
                                        <td style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            Plan
                                          </p>
                                        </td>
                                        <td align="left" style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            <?= $buy->plan ? $buy->plan->name : '' ?>
                                          </p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            Plan Start Date
                                          </p>
                                        </td>
                                        <td align="left" style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            <?= dateFormat($buy->started_at,'d F Y') ?>
                                          </p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            Plan Fees (One-time)
                                          </p>
                                        </td>
                                        <td align="left" style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            <?= $buy->plan ? c_format($buy->plan->price) : '' ?>
                                          </p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            Hosting Cost (Monthly)
                                          </p>
                                        </td>
                                        <td align="left" style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            <?= $buy->plan ? c_format($buy->plan->hosting_cost) : '' ?>
                                          </p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            Next Recurring Hosting Cost
                                          </p>
                                        </td>
                                        <td align="left" style="font-family:'Roboto', Arial !important">
                                          <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                            <?= dateFormat(date('Y-m-d', strtotime("+1 months", strtotime($buy->started_at))),'d F Y'); ?>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>

              
              <tr>
                <td align="center" style="padding-top:24px; padding-bottom:20px">
                  <table width="520" style="border-collapse:collapse">
                    <tbody>
                      <tr>
                        <td align="right" width="425" style="padding-bottom:15px; font-family:'Roboto', Arial !important">
                          <p style="font-size:18px; color:#000; margin:0; font-family:'Roboto', Arial !important">
                            Total Payment: 
                          </p>
                        </td>
                        <td align="right" style="padding-bottom:15px; font-family:'Roboto', Arial !important">
                          <p style="font-size:18px; color:#000; margin:0; font-family:'Roboto', Arial !important">
                            <?php
                              $total = 0;

                              if($buy->plan)
                              {
                                if($buy->plan->price > 0)
                                  $total += $buy->plan->price;
                                /*if($buy->plan->hosting_cost > 0)
                                  $total += $buy->plan->hosting_cost;*/
                              }
                            ?>
                            <?= ($total > 0) ? c_format($total) : 'Free' ?>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>

              <tr>
                <td align="center" style="padding-top:24px; padding-bottom:20px">
                  <table width="520" style="border-collapse:collapse">
                    <tbody>
                      <tr>
                        <td align="left" width="520" style="padding-bottom:15px; font-family:'Roboto', Arial !important">
                          <p style="color:#000; margin:0; font-family:'Roboto', Arial !important">Monthly hosting cost will be auto deduced from your e-wallet balance. Please make sure it has sufficient amount to stay enjoying member benefits!</p>
                          <br>
                          <p style="color:#000; margin:0; font-family:'Roboto', Arial !important">
                            Should you have any question regarding BFF membership, please reach out to us at <a href="mailto:bff@biggworld.co" target="_blank">bff@biggworld.co</a>. We'll get back to you within 5 working days.
                          </p>
                          <br>
                          <p style="color:#000; margin:0; font-family:'Roboto', Arial !important">
                            Thank you.
                          </p>
                          <br>
                          <p style="color:#000; margin:0; font-family:'Roboto', Arial !important">
                            With Regards,<br>BFF Team!
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      