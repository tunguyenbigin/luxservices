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
        stripeAccountEditMode.cancelEdit()
        swal({
            title:'Congratulations!',
            text: data.msg,
            icon: 'success',
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




let formBankAccount = 'bank-account'

let bankAccountEditMode = new EditMode()
bankAccountEditMode.wrapper = '#card-bank-account'
bankAccountEditMode.formid = formBankAccount

bankAccountEditMode.editAction()
bankAccountEditMode.cancelAction()

bankAccountEditMode.createFormRequest = ()=>{
    var bankForm = new Form()
    bankForm.formId = '#'+formBankAccount
    bankForm.url = api.banks.account.update
    bankForm.method ='post'

    bankForm.handleLoadingPanelOpen = ()=>{
        bankAccountEditMode.addLoadingPanel()
    }
    bankForm.handleLoadingPanelClose = ()=>{
        bankAccountEditMode.removeLoadingPanel()
    }
    bankForm.handleCancelProcess = ()=>{
        bankAccountEditMode.cancelEdit()
    }

    bankForm.handleSubmit()
    bankForm.handleCancel()

    bankForm.handleSuccess = (data)=>{
        bankAccountEditMode.cancelEdit()
        swal({
            title:'Congratulations!',
            text: data.msg,
            icon: 'success',
        })
    }
    bankForm.handleError = ()=>{
        swal({
            title: 'Error!',
            text: data.msg,
            icon: 'error'
        })
    }
}




jQuery(document).ready(function($){
    $(document).on('click','#depositAction',function(){
        $('#modDeposit').modal('show')
    })
});