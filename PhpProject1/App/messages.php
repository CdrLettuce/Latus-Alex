<?php
include('appHeader2.php');
?>
<div id="messages-container" class="" ng-controller='messagesController as ex'>  
    <div id='messagesResults' class='row container-fluid'>
        <!-- SIDEBAR for inbox and outbox -->
        <div  id='messages-sidebar' class='col-sm-4 med-top-marg'>
            <div id='inbox-container' >
                <div>
                    <h4  id='inbox' class='col-xs-12 center-text'>
                        Inbox 
                        <i class="fa fa-envelope fa" aria-hidden="true"></i>
                    </h4>
                </div>
                <!--HERE is where you ng-repeat through the inbox messages-->
                <div id='inbox-messages'>
                    <div>
                        <table class='table-striped table-side-messages'>
                            <tr ng-repeat='item in ex.inboxMessages track by $index'>
                                <td class='col-xs-12'>
                                    <a ng-click='ex.displayBigMessage(item)'>
                                        <p>From: {{item.first_name}} {{item.last_name}}</p>
                                        <p>Subject: {{item.subject}}</p>
                                        <p>Time: {{item.time_sent}}</p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <div id='outbox-container' >
                <div>
                    <h4 id='outbox' class='col-xs-12 center-text'>
                        Outbox
                        <i class="fa fa-share fa" aria-hidden="true"></i>
                    </h4>
                </div>
                <!--HERE is where you ng-repeat through the inbox messages-->
                <div id='outbox-messages'>
                    <div>
                        <table class='table-striped table-side-messages'>
                            <tr ng-repeat='item in ex.outboxMessages track by $index'>
                                <td class='col-xs-12'>
                                    <a ng-click='ex.displayBigMessage(item)'>
                                        <p>To: {{item.first_name}} {{item.last_name}}</p>
                                        <p>Subject: {{item.subject}}</p>
                                        <p>Time: {{item.time_sent}}</p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!--End Sidebar-->
               
        <!-- Main for displaying separate messages and  -->
        <div  id='messages-main' class='col-sm-8 xtra-top-marg'>
            <div  id='noBigMessage' ng-show='ex.noBigMessage' class='center-text'>
                <h4>Please select a message to view.</h4>
            </div>
            <div id ="current-message" class="row-container-fluid col-sm-12" ng-show="ex.showBigMessage">
                <div id='selected-message-content'>
                    <div id="message-subject"class="col-sm-12">
                        <h3>{{ex.bigMessage.subject}}</h3>
                    </div>
                    <div id='message-sender-and-time' class="col-sm-12">
                        <div id="message-sender-receiver" class="col-sm-5">
                            <h4>{{ex.bigMessage.first_name}} {{ex.bigMessage.last_name}}</h4>
                        </div>
                        <div id="from-time" class="col-sm-4 col-sm-offset-3">
                            <h4>{{ex.bigMessage.time_sent}}</h4>
                        </div>
                    </div>
                    <div id="the-message" class="col-sm-12">
                        <p>{{ex.bigMessage.message}}</p>
                    </div>
                </div>
                <!--reply information-->
                <div id='selected-message-reply' class="col-sm-12">
                    <div class='col-sm-12 no-pad'>
                        <div class="col-sm-2">
                            <p>Subject: </p>
                        </div>
                        <div id="reply-subject" class="col-sm-10">
                            <input type="text" id="your-subject"  ng-model="ex.bigMessage.replysubject">
                        </div>
                    </div>
                    <div class='col-sm-12 no-pad'>
                        <div class="col-sm-2">
                            <p>Message: </p>
                        </div>
                        <div id="your-message" class="col-sm-10">
                            <textarea  class="form-control" name="bio" id="bio" ng-model='ex.bigMessage.replymessage'></textarea>
                        </div>
                    </div>
                    <div class='col-sm-12 no-pad'>
                        <div class="col-sm-3 col-sm-offset-9">
                            <button ng-click="ex.inboxReply(ex.bigMessage)" id="reply-button" class=' btn btn-primary'>Reply</button>
                        </div> 
                    </div>
                </div>
            </div>         
        </div>
        <!--Modal for sent confirmation-->
        <div id="modalConfirm" class="modal">
            <!-- Modal content -->
            <div class="modal-confirm">
                <div class="modal-body">
                    <span class="close"><i class="fa fa-window-close" aria-hidden="true"></i></span>
                    <h3>Message has been sent</h3>
                </div>
            </div>
        </div>  
    </div>
</div>

</div>

</div>
