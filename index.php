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
				Tag: <input type="text" size="12" maxlength="150" name="Tag" value="DefaultTag"/>
				Email: <input type="text" size="12" maxlength="150" name="Email" value="DefaultMail@unknow.com"/>
				FirstName: <input type="text" size="12" maxlength="150" name="FirstName" value="DefaultFirstName"/>
				LastName: <input type="text" size="12" maxlength="150" name="LastName" value="DefaultLastName"/>
				CanRegisterMeanOfPayment: <input type="text" size="12" maxlength="150" name="CanRegisterMeanOfPayment" value="true"/>
				IP: <input type="text" size="12" maxlength="150" name="IP" value="127.0.0.1"/>
				Birthday: <input type="text" size="12" maxlength="150" name="Birthday"/>
				Password: <input type="text" size="12" maxlength="150" name="Password" value="123456789azerty"/>
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
            <div class="enter">/user/{user_id}/operations</div>
            <div class="content">
                <!-- get operations of user -->
                <form name="input" action="get_operations_user.php" method="get">
                    <input type="submit" value="GET" />
			        user_id* : <input type="text" size="12" maxlength="50" name="user_id">
                </form>
                <div class="enter">/user/{user_id}/operations/personal</div>
                <div class="content">
                    <!-- get operations on personal account  -->
                    <form name="input" action="get_operations_user_personal.php" method="get">
                        <input type="submit" value="GET" />
			            user_id* : <input type="text" size="12" maxlength="50" name="user_id">
                    </form>
                </div>
            </div>
            <div class="enter">/user/{user_id}/wallets</div>
            <div class="content">
                <!-- list wallet fir a user  -->
                <form name="input" action="get_wallets.php" method="get">
                    <input type="submit" value="GET" />
			        user_id* : <input type="text" size="12" maxlength="50" name="user_id">
                </form>
            </div>
            <div class="enter">/user/{user_id}/cards</div>
            <div class="content">
                <!-- list cards for a user  -->
                <form name="input" action="get_cards_for_user.php" method="get">
                    <input type="submit" value="GET" />
			        user_id* : <input type="text" size="12" maxlength="50" name="user_id">
                </form>
            </div>
            <div class="enter">/user/{user_id}/strongAuthentication</div>
            <div class="content">
                <!-- post request strongAuthentication -->
                <form name="input" action="post_request_strong_auth_user.php" method="get">
                    <input type="submit" value="POST" />
			        user_id : <input type="text" size="12" maxlength="50" name="user_id">
                </form>
                <!-- post request strongAuthentication -->
                <form name="input" action="get_request_strong_auth_user.php" method="get">
                    <input type="submit" value="GET"/>
                    user_id : <input type="text" size="12" maxlength="50" name="user_id">
                </form>
                <!-- put request strongAuthentication -->
                <form name="input" action="put_request_strong_auth_user.php" method="post">
                    <input type="submit" value="PUT"/>
                    user_id : <input type="text" size="12" maxlength="50" name="user_id">
                    IsDocumentsTransmitted (optional) : 
                    <select name="IsDocumentsTransmitted">
                        <option value="<nil>">NO_VALUE</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="ERROR_VALUE">ERROR_VALUE</option>
                    </select>
                    Tag (optional) : <input type="text" size="12" maxlength="150" name="Tag" value="<nil>"/>
                </form>
            </div>
        </div>
		<div class="enter">/operations</div>
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
            <!-- Create contribution -->
            <form name="input" action="contribute.php" method="get">
                <input type="submit" value="POST" />
                UserID (required) : <input type="text" size="12" maxlength="150" name="UserID" value ="0"/>
                WalletID (required) : <input type="text" size="12" maxlength="150" name="WalletID" value ="0"/>
                Amount (required) : <input type="text" size="12" maxlength="150" name="Amount" value="1000"/>
                ReturnURL (required) : <input type="text" size="12" maxlength="150" name="ReturnURL" value="<auto>" />
                Tag (optional) : <input type="text" size="12" maxlength="150" name="Tag" value="<nil>"/>
                ClientFeeAmount (optional) : <input type="text" size="12" maxlength="150" name="ClientFeeAmount" value="<nil>"/>
                TemplateURL (optional) : <input type="text" size="12" maxlength="150" name="TemplateURL" value="<nil>"/>
                RegisterMeanOfPayment (optional) : 
                 <select name="RegisterMeanOfPayment">
                    <option value="<nil>">NO_VALUE</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="ERROR_VALUE">ERROR_VALUE</option>
                </select>
                PaymentCardID (optional) : <input type="text" size="12" maxlength="150" name="PaymentCardID" value="<nil>"/>
                Culture (optional) : <input type="text" size="12" maxlength="150" name="Culture" value="<nil>"/>
                PaymentMethodType (optional) : 
                <select name="methodType">
                    <option value="<nil>">NO_VALUE</option>
                    <option value="cb_visa_mastercard">cb_visa_mastercard</option>
                    <option value="elv">elv</option>
                    <option value="amex">amex</option>
                </select>
                Type (optional) :
                <select name="Type">
                    <option value="<nil>">NO_VALUE</option>
                    <option value="Payline">Payline</option>
                    <option value="Ogone">Ogone</option>
                </select>
            </form>
            <!-- Create User & start a payment-->
            <form name="input" action="contribute_personal_account.php" method="get">
                <input type="submit" value="POST" />
				user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
				amount : <input type="text" size="12" maxlength="150" name="amount" value="1000" />
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
            </form>
            <!-- Contribu on a wallet-->
            <form name="input" action="contribute_wallet.php" method="get">
                <input type="submit" value="POST" />
				user_id* : <input type="text" size="12" maxlength="50" name="user_id">
				wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
				Register* : <input type="checkbox" name="registercard" />
				PaymentCardID : <input type="text" size="12" maxlength="50" name="PaymentCardID" />
				Method :
                <select name="methodType">
                    <option value="cb_visa_mastercard">cb_visa_mastercard</option>
                    <option value="elv">elv</option>
                    <option value="amex">amex</option>
                </select>
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
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
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
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
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
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
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
            </form>
        </div>
        <div class="enter">/wallet</div>
        <div class="content">
            <!-- Create wallet -->
            <form name="input" action="create_wallet.php" method="get">
                <input type="submit" value="POST" />
				user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
            </form>
            <div class="enter">/wallet/{wallet_id}</div>
            <div class="content">
                <!-- get operations on wallet  -->
                <form name="input" action="get_wallet.php" method="get">
                    <input type="submit" value="GET" />
		        wallet_id : <input type="text" size="12" maxlength="50" name="wallet_id">
                </form>
                <!-- pu wallet  -->
                <form name="input" action="put_wallet.php" method="put">
                    <input type="submit" value="PUT" />
		            ID : <input type="text" size="12" maxlength="50" name="ID">
                    <i>Tag : </i><input type="text" size="12" maxlength="50" name="Tag" value="Tag">
                    <i>Name : </i><input type="text" size="12" maxlength="50" name="Name" value="Name">
                    <i>Description : </i><input type="text" size="12" maxlength="50" name="Description" value="Description">
                    <i>RaisingGoalAmount : </i><input type="text" size="12" maxlength="50" name="RaisingGoalAmount" value="100100">
                    <i>ContributionLimitDate : </i><input type="text" size="12" maxlength="50" name="ContributionLimitDate" value="1451314781">
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
            <div class="enter">/wallet/{wallet_id}/users</div>
            <div class="content">
                <!-- list user on wallet  -->
                <form name="input" action="get_user_for_wallet.php" method="get">
                    <input type="submit" value="GET" />
			        wallet_id : <input type="text" size="12" maxlength="50" name="wallet_id">
                    include :
                    <select name="include">
                        <option value="NO_INCLUDE">Don't use include</option>
                        <option value="All">All</option>
                        <option value="Owners">Owners</option>
                        <option value="Contributors">Contributors</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="enter">/card</div>
        <div class="content">
            <!-- Create Card -->
            <form name="input" action="create_payment_card.php" method="get">
                <input type="submit" value="POST" />
				user_id : <input type="text" size="12" maxlength="50" name="user_id">
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
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
        </div>
        <div class="enter">/refund</div>
        <div class="content">
            <!-- create Pending refund -->
            <form name="input" action="create_pending_refund.php" method="get">
                <input type="submit" value="POST" />
			    user_id : <input type="text" size="12" maxlength="50" name="user_id">
			    contribution_id : <input type="text" size="12" maxlength="50" name="contribution_id">
                execution_id : <input type="text" size="12" maxlength="50" name="execution_id">
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
            </form>
            <!-- create Pending refund transfer -->
            <form name="input" action="create_pending_refund_transfer.php" method="get">
                <input type="submit" value="POST" />
			    UserID : <input type="text" size="12" maxlength="50" name="UserID">
			    TransferID : <input type="text" size="12" maxlength="50" name="TransferID">
                Tag: <input type="text" size="12" maxlength="150" name="Tag" value="DefaultTag"/>
            </form>            
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
                Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
            </form>
            <!-- Get beneficiaries -->
            <form name="input" action="get_beneficiary.php" method="get">
                <input type="submit" value="GET" />
                beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
            </form>

            <div class="enter">/beneficiaries/{user_id}/strongAuthentication</div>
            <div class="content">
                <!-- post request strongAuthentication -->
                <form name="input" action="post_request_strong_auth_beneficiary.php" method="get">
                    <input type="submit" value="POST" />
			        beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
                </form>
                <!-- post request strongAuthentication -->
                <form name="input" action="get_request_strong_auth_beneficiary.php" method="get">
                    <input type="submit" value="GET"/>
                    beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
                </form>
                <!-- put request strongAuthentication -->
                <form name="input" action="put_request_strong_auth_beneficiary.php" method="post">
                    <input type="submit" value="PUT"/>
                    beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
                    IsDocumentsTransmitted (optional) : 
                    <select name="IsDocumentsTransmitted">
                        <option value="<nil>">NO_VALUE</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="ERROR_VALUE">ERROR_VALUE</option>
                    </select>
                    Tag (optional) : <input type="text" size="12" maxlength="150" name="Tag" value="<nil>"/>
                </form>
            </div>
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
            Tag: <input type="text" size="12" maxlength="150" name="tag" value="DefaultTag"/>
            </form>
            <!-- get transfer -->
            <form name="input" action="get_transfer.php" method="get">
                <input type="submit" value="GET" />
			    transfer_id* : <input type="text" size="12" maxlength="50" name="transfer_id">
            </form>
        </div>
        <div class="enter">/transfer-ifg</div>
        <div class="content">
            <!-- Post transfer-ifg -->
            <form name="input" action="create_expense_transferIFG.php" method="get">
                <input type="submit" value="POST" />
                wallet_id : <input type="text" size="12" maxlength="50" name="wallet_id" value="">
                amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
			    height : <input type="text" size="12" maxlength="34" name="height" value="800">
                width : <input type="text" size="12" maxlength="100" name="width" value="600">
                ifg_host : <input type="text" size="12" maxlength="100" name="ifg_host" value="127.0.0.1">
                retailer_id: <input type="text" size="12" maxlength="100" name="retailer_id" value="Retailler_id"/>
                track : <input type="text" size="12" maxlength="100" name="track" value="DefaultTrack">
			    incentive_type : <input type="text" size="12" maxlength="100" name="incentive_type" value="incentive type par default">
                locale : <input type="text" size="12" maxlength="100" name="locale" value="en">
                retailer_secret : <input type="text" size="12" maxlength="100" name="retailer_secret" value="retailler secret par defaut">
                Tag: <input type="text" size="12" maxlength="150" name="Tag" value="DefaultTag"/>
            </form>
        </div>
        <div class="enter">/refund-ifg</div>
        <div class="content">
            <!-- Post transfer-ifg_Refund -->
            <form name="input" action="create_expense_transferIFG_Refund.php" method="get">
                <input type="submit" value="POST" />
                transactionId : <input type="text" size="12" maxlength="100" name="transactionId" value="">
                Tag: <input type="text" size="12" maxlength="150" name="Tag" value="DefaultTag"/>
            </form>
        </div>
		
		<div class="enter">/amazon </div>
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
            <!-- amazon GET voucher -->
            <form name="input" action="GetVoucherAmazon.php" method="post">
                <input type="submit" value="GET" />
                voucher_id : <input type="text" size="12" maxlength="50" name="voucher_id">
            </form>
        </div>

        <div class="enter">/withdrawals</div>
        <div class="content">
            <!-- create withdrawal -->
            <form name="input" action="create_withdrawal.php" method="get">
                <input type="submit" value="POST" />
			    user_id* : <input type="text" size="12" maxlength="50" name="user_id">
			    wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
			    amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
            </form>
            <!-- get withdrawal -->
            <form name="input" action="get_withdrawal.php" method="get">
                <input type="submit" value="GET" />
			    withdrawal_id : <input type="text" size="12" maxlength="50" name="withdrawal_id">
            </form>
        </div>

        <div class="enter">/StrongAuthentifications</div>
        <div class="content">
            <!-- Get all pending Strong Authentications -->
            <form name="input" action="get_all_pending_Strong_Authentications.php" method="get">
                <input type="submit" value="GET" />
            </form>
        </div>

        <!-- create transfer to personal account -->
        <form name="input" action="create_transfer_to_personal_account.php" method="get">
			payer_id : <input type="text" size="12" maxlength="50" name="payer_id">
			beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
			amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
            <input type="submit" value="create transfer to personal account" />
        </form>

    </body>
	</body>
</html>