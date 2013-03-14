    var form_bjlLWDFaNmlvSsKwWDNaK2I3YUts;
  var object_login;
  var i;
  if (typeof(__aObjects__) === 'undefined') {
    var __aObjects__ = [];
    }
    function loadForm_bjlLWDFaNmlvSsKwWDNaK2I3YUts(ajaxServer)
    {
    if (typeof(G_Form)==='undefined') return alert('form.js was not loaded');
      form_bjlLWDFaNmlvSsKwWDNaK2I3YUts=new G_Form(document.getElementById('bjlLWDFaNmlvSsKwWDNaK2I3YUts'),'bjlLWDFaNmlvSsKwWDNaK2I3YUts');
      object_login = form_bjlLWDFaNmlvSsKwWDNaK2I3YUts;
      __aObjects__.push(object_login);
      var myForm=form_bjlLWDFaNmlvSsKwWDNaK2I3YUts;
      if (myForm.aElements===undefined) alert("login");
        myForm.ajaxServer=ajaxServer;
        //
                          i = myForm.aElements.length;
                      var element = getField("TITLE");
            
                        i = myForm.aElements.length;
                      myForm.aElements[i] = new G_Text(myForm, myForm.element.elements['form[USR_USERNAME]'],'USR_USERNAME');
            myForm.aElements[i].setAttributes({"size":"30","maxLength":"50","validate":"Any","mask":"","defaultValue":"","required":false,"dependentFields":"","linkField":"","strTo":"","readOnly":false,"sqlOption":[],"formula":"","function":"","replaceTags":0,"renderMode":"","comma_separator":".","label":"User","language":"en","group":0,"mode":"edit","gridFieldType":"","gridLabel":"","hint":"","enableHtml":false,"style":"","withoutLabel":false,"className":"","colWidth":140,"colAlign":"left","colClassName":"","titleAlign":"","align":"","showInTable":"","dataCompareField":"","dataCompareType":"=","pmtable":"","keys":"","pmconnection":"","pmfield":"","modeGrid":"","modeForGrid":"edit","options":[]});
            //alert('{"size":"30","maxLength":"50","validate":"Any","mask":"","defaultValue":"","required":false,"dependentFields":"","linkField":"","strTo":"","readOnly":false,"sqlOption":[],"formula":"","function":"","replaceTags":0,"renderMode":"","comma_separator":".","label":"User","language":"en","group":0,"mode":"edit","gridFieldType":"","gridLabel":"","hint":"","enableHtml":false,"style":"","withoutLabel":false,"className":"","colWidth":140,"colAlign":"left","colClassName":"","titleAlign":"","align":"","showInTable":"","dataCompareField":"","dataCompareType":"=","pmtable":"","keys":"","pmconnection":"","pmfield":"","modeGrid":"","modeForGrid":"edit","options":[]}');
            
                          i = myForm.aElements.length;
                      var element = getField("USR_PASSWORD");
            
                        i = myForm.aElements.length;
                      myForm.aElements[i] = new G_DropDown(myForm, myForm.element.elements['form[USER_LANG]'],'USER_LANG');
            myForm.aElements[i].setAttributes({"defaultValue":"","required":false,"dependentFields":"","readonly":false,"option":[],"sqlOption":[],"saveLabel":0,"modeGridDrop":"","renderMode":"","selectedValue":"","label":"Language","language":"en","group":0,"mode":"edit","gridFieldType":"","gridLabel":"","hint":"","enableHtml":false,"style":"","withoutLabel":false,"className":"","colWidth":140,"colAlign":"left","colClassName":"","titleAlign":"","align":"","showInTable":"","dataCompareField":"","dataCompareType":"=","pmtable":"","keys":"","pmconnection":"","pmfield":"","modeGrid":"","modeForGrid":"edit","options":[]});
            
                          i = myForm.aElements.length;
                      myForm.aElements[i] = new G_Text(myForm, myForm.element.elements['form[URL]'],'URL');
            myForm.aElements[i].setAttributes({"sqlOption":[],"dependentFields":"","label":null,"language":"en","group":0,"mode":"edit","defaultValue":null,"gridFieldType":"","gridLabel":"","hint":"","enableHtml":false,"style":"","withoutLabel":false,"className":"","colWidth":140,"colAlign":"left","colClassName":"","titleAlign":"","align":"","showInTable":"","dataCompareField":"","dataCompareType":"=","pmtable":"","keys":"","pmconnection":"","pmfield":"","modeGrid":"","modeForGrid":"edit","options":[]});
            
                          i = myForm.aElements.length;
                      var element = getField("LOGIN_VERIFY_MSG");
            
                        i = myForm.aElements.length;
                      var element = getField("BSUBMIT");
            
                        i = myForm.aElements.length;
                      var element = getField("FORGOT_PASWORD_LINK");
            
                        i = myForm.aElements.length;
                      var element = getField("JS");
            
                                                                                                                                                        }
        