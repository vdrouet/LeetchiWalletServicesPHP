<?php require_once (dirname(__FILE__) . "/lib/common.inc");?>
<html>
    <head>
        <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
        <script type="text/javascript">
            $(document).ready(function(){
            
                $('.enter').click(function(){
            
                    $(this).next('.content').slideToggle('fast');
            
                });
            });
        </script>
        <style type="text/css">
              <!--
                  .enter {
                      max-width: 960px;
                      background-color:#99c8ab;
                      padding-left:20px;
                      margin-left:10px;
                      }
                  .content {
                      max-width: 960px;
                      background-color:#E7F6EC;
                      margin-bottom:10px;
                      margin-left:10px;
                      padding:5px;
                      padding-left:40px;
                      }
            nput[type=submit] {
                  text-transform: uppercase;
                  background-color: rgb(16, 165, 74);
                  text-decoration: none;
                  color: white;
                  display: inline-block;
                  width: 50px;
                  font-size: 0.7em;
                  text-align: center;
                  padding: 7px 0px 4px;
                  border-radius: 2px 2px 2px 2px;
            }
              -->
        </style>
    </head>
    <body>
        <p>Environment : <?php echo $leetchiBaseURL;?></p>
        <p>Partner : <?php echo $partnerID;?></p>
        <p>
			    params with * can be create if they are missing<br>
               params in <i>italic</i> are optional<br>
               4970100000000170<br>
        </p>
        <div class="enter">/user</div>
        <div class="content">
            <!-- Create User -->
            <form name="input" action="create_user.php" method="get">
                <input type="submit" value="POST" />
			Tag: <input type="text" size="12" maxlength="150" name="Tag" value="DefaultTag" />
			Email: <input type="text" size="12" maxlength="150" name="Email" value="DefaultMail@unknow.com" />
			FirstName: <input type="text" size="12" maxlength="150" name="FirstName" value="DefaultFirstName" />
			LastName: <input type="text" size="12" maxlength="150" name="LastName" value="DefaultLastName" />
			CanRegisterMeanOfPayment: <input type="text" size="12" maxlength="150" name="CanRegisterMeanOfPayment" value="true" />
			IP: <input type="text" size="12" maxlength="150" name="IP" value="127.0.0.1" />
			Birthday: <input type="text" size="12" maxlength="150" name="Birthday" />
			Password: <input type="text" size="12" maxlength="150" name="Password" value="123456789azerty" />
			Nationality: <input type="text" size="12" maxlength="150" name="Nationality" value="French" />
			PersonType :
                <select name="PersonType">
                    <option value="NATURAL_PERSON">NATURAL_PERSON</option>
                    <option value="LEGAL_PERSONALITY">LEGAL_PERSONALITY</option>
                    <option value="ERROR_VALUE_TYPE">ERROR_VALUE_TYPE</option>
                    <option value="<nil>">NO_VALUE</option>
                </select>
            </form>
           
            <!-- Update User -->
            <form name="input" action="update_user.php" method="put">
                <input type="submit" value="PUT" />
			user_id: <input type="text" size="12" maxlength="150" name="user_id" />
			Nationality : <input type="text" size="12" maxlength="150" name="Nationality" value="French" />
			PersonType :
                <select name="PersonType">
                    <option value="NATURAL_PERSON">NATURAL_PERSON</option>
                    <option value="LEGAL_PERSONALITY">LEGAL_PERSONALITY</option>
                </select>
            </form>
            <!-- Get User -->
            <form name="input" action="get_user.php" method="get">
                <input type="submit" value="GET" />
			user_id: <input type="text" size="12" maxlength="150" name="user_id" />
            </form>
        </div>

         <div class="enter">Authentication</div>
        <div class="content">
        <div class="enter">/users/{user_id}/strongAuthentication</div>
        <div class="content">
              <!-- put strong validation-->
            <form name="input" action="post_request_strong_auth_user.php" method="POST">
                <input type="submit" value="POST" />
			user_id: <input type="text" size="12" maxlength="150" name="user_id" />
			
            </form>
             <!-- get strong validation-->
            <form name="input" action="get_request_strong_auth_user.php" method="GET">
                <input type="submit" value="GET" />
			user_id: <input type="text" size="12" maxlength="150" name="user_id" />
			
            </form>
            <!-- get strong validation-->
            <form name="input" action="put_request_strong_auth_user.php" method="PUT">
                <input type="submit" value="PUT" />
			user_id: <input type="text" size="12" maxlength="150" name="user_id" />
			isConfirmed : <select name="IsDocumentsTransmitted">                 
                    <option value="No">no</option>
                    <option value="Yes">yes</option>
                    <option value="error">error</option>
                </select>
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="<nil>" />
			
            </form>
        </div>

        <div class="enter">/beneficiaries/{beneficiary_id}/strongAuthentication</div>
        <div class="content">
              <!-- put strong validation-->
            <form name="input" action="post_request_strong_auth_beneficiary.php" method="POST">
                <input type="submit" value="POST" />
			beneficiary_id: <input type="text" size="12" maxlength="150" name="beneficiary_id" />
			
            </form>
             <!-- get strong validation-->
            <form name="input" action="get_request_strong_auth_beneficiary.php" method="GET">
                <input type="submit" value="GET" />
			beneficiary_id: <input type="text" size="12" maxlength="150" name="beneficiary_id" />
			
            </form>
            <!-- get strong validation-->
            <form name="input" action="put_request_strong_auth_beneficiary.php" method="POST">
                <input type="submit" value="PUT" />
			beneficiary_id: <input type="text" size="12" maxlength="150" name="beneficiary_id" />
			isConfirmed : <select name="IsDocumentsTransmitted">                 
                    <option value="No">no</option>
                    <option value="Yes">yes</option>
                    <option value="error">error</option>
                </select>
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="<nil>" />
			
            </form>
        </div>
        <div class="enter">/strongAuthentication</div>
        <div class="content">
              <!-- put strong validation-->
            <form name="input" action="get_all_pending_Strong_Authentications.php" method="GET">
                <input type="submit" value="GET" />			
            </form>            
        </div>
 </div>
        <div class="enter">/user/{user_id}/operations</div>
        <div class="content">
            <!-- get operations of user -->
            <form name="input" action="get_operations_user.php" method="get">
                <input type="submit" value="GET" />
		    user_id* : <input type="text" size="12" maxlength="50" name="user_id">
            </form>
        </div>
        <div class="enter">/user/{user_id}/operations/personal</div>
        <div class="content">
            <!-- get operations on personal account  -->
            <form name="input" action="get_operations_user_personal.php" method="get">
                <input type="submit" value="GET" />
		        user_id* : <input type="text" size="12" maxlength="50" name="user_id">
            </form>
        </div>

        <div class="enter">/operations/{operation_id}</div>
        <div class="content">
            <!-- get an operation  -->
            <form name="input" action="get_operation.php" method="get">
                <input type="submit" value="GET" />
		        operation_id* : <input type="text" size="12" maxlength="50" name="operation_id">
            </form>
        </div>
        <div class="enter">/contributions</div>
        <div class="content">
            <!-- get contribution by id-->
            <form name="input" action="get_contribution.php" method="get">
                <input type="submit" value="GET" />
			contribution_id: <input type="text" size="12" maxlength="150" name="contribution_id" />
            </form>
            <!-- Contribu on a wallet-->
            <form name="input" action="contribute_wallet.php" method="get">
                <input type="submit" value="POST" />
			user_id* : <input type="text" size="12" maxlength="50" name="user_id">
			wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
			amount : <input type="text" size="12" maxlength="150" name="amount" value="1000" />
			fees : <input type="text" size="12" maxlength="150" name="fees" value="10" />
               Register* : <input type="checkbox" name="registercard" />
			PaymentCardID : <input type="text" size="12" maxlength="50" name="PaymentCardID" />
                <select name="methodType">
                    <option value="cb_visa_mastercard">cb_visa_mastercard</option>
                    <option value="elv">elv</option>
                    <option value="amex">amex</option>
                    <option value="giropay">giropay</option>
                    <option value="sofort">sofort</option>
                </select>
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
        </div>
        <div class="enter">/recurrent-contributions</div>
        <div class="content">
            <!-- get a recurrent-contribution-->
            <form name="input" action="get_recurrent_contribution.php" method="get">
                <input type="submit" value="GET" />
			recurrent_contribution_id: <input type="text" size="12" maxlength="150" name="recurrent_contribution_id" />
            </form>
            <!-- create recurrent-contribution-->
            <form name="input" action="contribute_wallet_rec.php" method="get">
                <input type="submit" value="POST" />
			user_id: <input type="text" size="12" maxlength="150" name="user_id" />
               wallet_id: <input type="text" size="12" maxlength="150" name="wallet_id" />
               amount: <input type="text" size="12" maxlength="150" name="amount" />
               clientFeeAmount: <input type="text" size="12" maxlength="150" name="clientFeeAmount" />
               startdate (timestamp): <input type="text" size="12" maxlength="150" name="datets" />
               FrequencyCode:
                <select name="FrequencyCode">
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="TwiceMonthly">TwiceMonthly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Bimonthly">Bimonthly</option>
                    <option value="Quarterly">Quarterly</option>
                    <option value="Annual">Annual</option>
                    <option value="Biannual">Biannual</option>
                </select>
               NumberOfExecutions: <input type="text" size="12" maxlength="150" name="NumberOfExecutions" />
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
            <!-- Disable recurrent-contribution-->
            <form name="input" action="disable_recurrent_contribution.php" method="get">
                <input type="submit" value="DISABLE" />
			recurrent_contribution_id: <input type="text" size="12" maxlength="150" name="recurrent_contribution_id" />
            </form>
            <div class="enter">/recurrent-contributions/{}/executions</div>
            <div class="content">
                <!-- get a recurrent-contribution-->
                <form name="input" action="get_recurrent_contribution_executions.php" method="get">
                    <input type="submit" value="GET" />
			    recurrent_contribution_id: <input type="text" size="12" maxlength="150" name="recurrent_contribution_id" />
                </form>
            </div>
        </div>
        <div class="enter">/contributions-by-withdrawal</div>
        <div class="content">
            <!-- Get contributions-by-withdrawal -->
            <form name="input" action="get_contribute_by_withdrawal.php" method="get">
                <input type="submit" value="GET" />
			contribution_id: <input type="text" size="12" maxlength="150" name="contribution_id" />
            </form>
            <form name="input" action="contribute_by_withdrawal_personal_account.php" method="get">
                <input type="submit" value="POST" />
			user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
                <i>wallet_id</i> : <input type="text" size="12" maxlength="150" name="wallet_id" />
			amount : <input type="text" size="12" maxlength="150" name="amount" value="1000" />
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
        </div>
        <div class="enter">/immediate-contributions</div>
        <div class="content">
            <!-- Get immediate-contributions -->
            <form name="input" action="get_immediate_contribution.php" method="get">
                <input type="submit" value="GET" />
			get_immediate_contribution: <input type="text" size="12" maxlength="150" name="immediate_contribution_id" />
            </form>
            <form name="input" action="create_immediate_contribution.php" method="get">
                <input type="submit" value="POST" />
			user_id : <input type="text" size="12" maxlength="150" name="user_id" />
               wallet_id : <input type="text" size="12" maxlength="150" name="wallet_id" />
               paymentCard_id : <input type="text" size="12" maxlength="150" name="paymentCard_id" value="0" />
			amount : <input type="text" size="12" maxlength="150" name="amount" value="1000" />
               clientFeeAmount : <input type="text" size="12" maxlength="150" name="clientFeeAmount" value="0" />
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
        </div>
        <div class="enter">/wallet</div>
        <div class="content">
            <!-- Create wallet -->
            <form name="input" action="create_wallet.php" method="get">
                <input type="submit" value="POST" />
			user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>

            <div class="enter">/wallet/{wallet_id}</div>
            <div class="content">
                <!-- get operations on wallet  -->
                <form name="input" action="get_wallet.php" method="get">
                    <input type="submit" value="GET" />
		        wallet_id : <input type="text" size="12" maxlength="50" name="wallet_id">
                </form>
            </div>
            <div class="enter">/wallet/{wallet_id}/operations</div>
            <div class="content">
                <!-- get operations on wallet  -->
                <form name="input" action="get_operations_wallet.php" method="get">
                    <input type="submit" value="GET" />
		        wallet_id : <input type="text" size="12" maxlength="50" name="wallet_id">
                </form>
            </div>
        </div>
        <div class="enter">/card</div>
        <div class="content">
            <!-- Create Card -->
            <form name="input" action="create_payment_card.php" method="get">
                <input type="submit" value="POST" />
			user_id : <input type="text" size="12" maxlength="50" name="user_id">
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
            <!-- Delete Card -->
            <form name="input" action="delete_card.php" method="get">
                <input type="submit" value="DELETE" />
			paymentcard_id : <input type="text" size="12" maxlength="50" name="paymentcard_id">
            </form>
            <!-- get_payment_card -->
            <form name="input" action="get_payment_card.php" method="get">
                <input type="submit" value="GET" />
			paymentcard_id : <input type="text" size="12" maxlength="50" name="paymentcard_id">
            </form>
			<!-- get_payment_card -->
            <form name="input" action="get_user_payment_card.php" method="get">
                <input type="submit" value="GET user card list" />
			user_id : <input type="text" size="12" maxlength="50" name="user_id">
            </form>
        </div>
        <div class="enter">/refund</div>
        <div class="content">
            <!-- get_payment_card -->
            <form name="input" action="get_refund.php" method="get">
                <input type="submit" value="GET" />
				refund_id : <input type="text" size="12" maxlength="50" name="refund_id">
            </form>
            <!-- create Pending refund -->
            <form name="input" action="create_pending_refund.php" method="get">
                <input type="submit" value="POST" />
		    user_id : <input type="text" size="12" maxlength="50" name="user_id">
		    contribution_id : <input type="text" size="12" maxlength="50" name="contribution_id">
               execution_id : <input type="text" size="12" maxlength="50" name="execution_id">
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
<<<<<<< HEAD
        </div>
        <div class="enter">/transfer-refunds</div>
        <div class="content">
            <!-- get_payment_card -->
            <form name="input" action="get_refund_transfer.php" method="get">
                <input type="submit" value="GET" />
				transferrefund_id : <input type="text" size="12" maxlength="50" name="transferrefund_id">
            </form>
            <!-- create Pending refund transfer -->
            <form name="input" action="create_pending_refund_transfer.php" method="get">
                <input type="submit" value="POST" />
			    UserID : <input type="text" size="12" maxlength="50" name="UserID">
			    TransferID : <input type="text" size="12" maxlength="50" name="TransferID">
                Tag: <input type="text" size="12" maxlength="150" name="Tag" value="DefaultTag"/>
            </form>            
=======
>>>>>>> 5607d5b8d41a3a594be890114c2255142eda0b28
        </div>
        <div class="enter">/beneficiaries</div>
        <div class="content">
            <!-- Post beneficiaries -->
            <form name="input" action="create_beneficiary.php" method="get">
                <input type="submit" value="POST" />
               BankAccountBIC : <input type="text" size="12" maxlength="50" name="BankAccountBIC" value="CRLYFRPP">
		    BankAccountIBAN : <input type="text" size="12" maxlength="34" name="BankAccountIBAN" value="FR3020041010124530725S03383">
               BankAccountOwnerName : <input type="text" size="12" maxlength="100" name="BankAccountOwnerName" value="Nom par defaut">
               BankAccountOwnerAddress : <input type="text" size="12" maxlength="100" name="BankAccountOwnerAddress" value="Adresse par defaut">
               Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
        </div>
        <div class="enter">/transfers</div>
        <div class="content">
            <!-- create transfer -->
            <form name="input" action="create_transfer.php" method="get">
                <input type="submit" value="POST" />
		payer_id : <input type="text" size="12" maxlength="50" name="payer_id">
		beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
		wallet_beneficiary_id : <input type="text" size="12" maxlength="50" name="wallet_beneficiary_id">
           wallet_payer_id : <input type="text" size="12" maxlength="50" name="wallet_payer_id">
		amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
                fees : <input type="text" size="12" maxlength="50" name="fees" value="0">
           Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
        </div>

        <div class="enter">/amazon
        </div>
<<<<<<< HEAD
		
		<div class="enter">/amazonvoucher</div>
=======
>>>>>>> 5607d5b8d41a3a594be890114c2255142eda0b28
        <div class="content">
            <!-- amazon POST -->
            <form name="input" action="PostVoucherAmazon.php" method="post">
                <input type="submit" value="POST" />
                user_id : <input type="text" size="12" maxlength="50" name="user_id">
                wallet_id : <input type="text" size="12" maxlength="50" name="wallet_id">
                amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
                store : <input type="text" size="12" maxlength="50" name="store" value="fr">
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag" />
            </form>
        </div>

        <div class="enter">/amazon/{voucherId}
        </div>
        <div class="content">
            <!-- amazon POST -->
            <form name="input" action="GetVoucherAmazon.php" method="post">
                <input type="submit" value="GET" />
                voucher_id : <input type="text" size="12" maxlength="50" name="voucher_id">

            </form>
        </div>

        <!-- create withdrawal -->
        <form name="input" action="create_withdrawal.php" method="get">
		user_id* : <input type="text" size="12" maxlength="50" name="user_id">
		wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
		amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
        clientfeeamount : <input type="text" size="12" maxlength="50" name="ClientFeeAmount" value="0">
            <input type="submit" value="Create withdrawal" />
        </form>
        <!-- get request strongAuthentication -->
        <form name="input" action="get_request_strong_auth.php" method="get">
		user_id* : <input type="text" size="12" maxlength="50" name="user_id">
            <input type="submit" value="get strongAuthentication" />
        </form>

        <!-- create transfer to personal account -->
        <form name="input" action="create_transfer_to_personal_account.php" method="get">
		payer_id : <input type="text" size="12" maxlength="50" name="payer_id">
		beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
		amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
            <input type="submit" value="create transfer to personal account" />
        </form>
        <!-- get transfer -->
        <form name="input" action="get_transfer.php" method="get">
		transfer_id* : <input type="text" size="12" maxlength="50" name="transfer_id">
            <input type="submit" value="get transfer" />
        </form>
    </body>
</body>
</html>