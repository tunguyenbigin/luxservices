import Form from '@themes/inc/form.js'
import EditMode from '@themes/inc/editForm.js' 
import swal from 'sweetalert'

let formPersonalInformations = 'profile-personal'

let personalEditMode = new EditMode()
personalEditMode.wrapper = '#card-profile-personal'
personalEditMode.formid = formPersonalInformations

personalEditMode.editAction()
personalEditMode.cancelAction()

personalEditMode.createFormRequest = ()=>{
	var personalForm = new Form()
		personalForm.formId = '#'+formPersonalInformations
		personalForm.url = api.users.profile.personal
		personalForm.method ='post'
		personalForm.handleSuccess = (data)=>{
			//console.log(data)
		}
		personalForm.handleError = (data)=>{
			//console.log(data)
		}

		personalForm.handleLoadingPanelOpen = ()=>{
			personalEditMode.addLoadingPanel()
		}
		personalForm.handleLoadingPanelClose = ()=>{
			personalEditMode.removeLoadingPanel()
		}
		personalForm.handleCancelProcess = ()=>{
			personalEditMode.cancelEdit()
		}

    	personalForm.handleSubmit()
    	personalForm.handleCancel()

		personalForm.handleSuccess = (data)=>{
            //personalEditMode.cancelEdit()
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
		personalForm.handleError = ()=>{
            swal({
				title: 'Error!',
                text: data.msg,
                icon: 'error'
            })
		}
}

jQuery(document).ready(function(){

})