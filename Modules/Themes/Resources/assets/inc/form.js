'use strict'
import swal from 'sweetalert'
import axios from 'axios'
let _instance
class Form{
    constructor(id = null, url = null, method = 'get', data = null, isUpload=null, textLoading = 'Please wait', controlObj = null, invalidColor = '#a94442'){
        this.formId         = id
        this.url            = url
        this.method         = method
        this.data           = data
        this.isUpload       = null
        this.textLoading    = textLoading
        this.controlObj     = controlObj
        this.invalidColor   = invalidColor
    }
    getInstance(){
        if(!_instance){
            return _instance = new Form()
        }
        return _instance
    }
    handleRemoveError(){
        $(this.formId).children().find('.wp-input').children('.input-group').removeClass('is-invalid')
        $(this.formId).children().find('.wp-input').children('input').removeClass('is-invalid')
        $(this.formId).children().find('.wp-input').children('.help-block').children('p').remove()
    }
    handleBeforeSubmit(){
        //console.log('hook before submit has been called')
    };
    handleCloseWarning(){

    }

    getSizeObject(obj){
        var size = 0, key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    }

    handleLoadingPanelOpen(){}
    handleLoadingPanelClose(){}

    handleSubmit(){
        let btnSubmit = $(this.formId).children().find('button[data-control="submit"]');
        this.controlObj = btnSubmit //set control object
        /** add loading button **/
        btnSubmit.attr('data-loading-text',"<i class='fa fa-spinner fa-spin'></i> "+this.textLoading)
        /** end loading button **/
        btnSubmit.click( e => {
            btnSubmit.button('loading')
            this.handleLoadingPanelOpen()
            e.preventDefault()
            this.handleRemoveError()//remove all error

            /** get form data **/
            let formData = new FormData()
            let inputData  = $(this.formId).serializeArray()
            $.each(inputData, ( key, input ) => {
                formData.append( input.name, input.value )
            })

            if( this.isUpload ){
                let fileData = $( this.formId + ' input[type="file"]')[0].file
                for (let i = 0; i < fileData.length; i++) {
                    formData.append("file[]", fileData[i]);
                }
            }
            /** end get form data **/
            this.handleBeforeSubmit()
            axios({
                url     : this.url,
                method  : this.method,
                data    : formData,
                headers : { 'Content-Type': this.isUpload ? 'multipart/form-data' : 'application/json; form-data; charset=UTF-8' }
            }).then( response => {
                
                btnSubmit.button('reset')
                this.handleLoadingPanelClose()

                if( response.data.status === 'success' ){
                    this.handleSuccess(response.data)
                }else{
                    this.handleError(response.data)
                }
            }).catch( error => {
                btnSubmit.button('reset')
                this.handleLoadingPanelClose()
                if(error.response.status){
                    var errors = error.response.data.errors

                    for (var erobj in errors) {
                        if (errors.hasOwnProperty(erobj)) {

                            if((errors[erobj][0]).type && (errors[erobj][0]).type == 'alert' ){
                                swal({
                                    title: 'Whoops!',
                                    text: (errors[erobj][0]).msg,
                                    icon: 'error',
                                    onClose: function () {
                                        this.handleCloseWarning()
                                    }
                                });
                            }

                            $('.is-invalid').css('border-color', this.invalidColor+' !important')
                            if($(this.formId+' [name = '+erobj+']').closest('.wp-input').children('.input-group')[0])
                                $(this.formId+' [name = '+erobj+']').closest('.wp-input').children('.input-group').addClass('is-invalid')
                            else
                                $(this.formId+' [name = '+erobj+']').addClass('is-invalid')
                            $(this.formId+' [name = '+erobj+']').closest('.wp-input').children('.help-block').append('<p style="color: '+this.invalidColor+'">'+errors[erobj][0]+'</p>')
                        }
                    }
                }

                this.handleErrorException(error.response)
            })
        })
    }

    handleCancelProcess(data){
        //console.log('hook handle cancel action process form')
    }

    handleCancel(){
        let btnCancel = $(this.formId).children().find('button[data-control="cancel"]');
        btnCancel.click(()=>{
            this.handleCancelProcess()
        })
    }

    handleSuccess(data){
        //console.log('hook handle success has been called')
    }
    handleError(data){
        //console.log('hook handle error has been called')
    }
    handleErrorException(data){

    }

}
export default Form