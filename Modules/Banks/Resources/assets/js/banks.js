import Form from '@themes/inc/form.js'
import EditMode from '@themes/inc/editForm.js'
import swal from 'sweetalert'

let formStripeAccount = 'stripe-account'

let stripeAccountEditMode = new EditMode()
stripeAccountEditMode.wrapper = '#card-stripe-account'
stripeAccountEditMode.formid = formStripeAccount

stripeAccountEditMode.editAction()
stripeAccountEditMode.cancelAction()

stripeAccountEditMode.createFormRequest = ()=>{
    var stripeForm = new Form()
    stripeForm.formId = '#'+formStripeAccount
    stripeForm.url = api.banks.stripe.update
    stripeForm.method ='post'
    stripeForm.handleSuccess = (data)=>{
        //console.log(data)
    }
    stripeForm.handleError = (data)=>{
        //console.log(data)
    }

    stripeForm.handleLoadingPanelOpen = ()=>{
        stripeAccountEditMode.addLoadingPanel()
    }
    stripeForm.handleLoadingPanelClose = ()=>{
        stripeAccountEditMode.removeLoadingPanel()
    }
    stripeForm.handleCancelProcess = ()=>{
        stripeAccountEditMode.cancelEdit()
    }

    stripeForm.handleSubmit()
    stripeForm.handleCancel()

    stripeForm.handleSuccess = (data)=>{
        //stripeAccountEditMode.cancelEdit()
        swal({
            title:'Congratulations!',
            text: data.msg,
            icon: 'success',
            onClose: function(){
                alert('handle')
                window.location.reload()
            }
        })
    }
    stripeForm.handleError = ()=>{
        swal({
            title: 'Error!',
            text: data.msg,
            icon: 'error'
        })
    }
}

jQuery(document).ready(function(){

})