import Form from '@themes/inc/form.js'
import EditMode from '@themes/inc/editForm.js' 
import swal from 'sweetalert'

let formPersonalInformations = 'profile-personal'

let personalEditMode = new EditMode()
personalEditMode.wrapper = '#card-profile-personal'
personalEditMode.formid = formPersonalInformations

personalEditMode.editAction()

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
		personalForm.handleSubmit()
}

jQuery(document).ready(function(){
	alert('loading ok')
})