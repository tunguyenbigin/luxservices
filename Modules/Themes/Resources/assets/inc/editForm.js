'use strict'
class EditForm{
	constructor(wrapper=null, formid=null){
		this.wrapper = wrapper
		this.formid = formid
		this.appendControl = 0
	}
	createFormRequest(){
		
	}
	addLoadingPanel(){
		$(this.wrapper).prepend(`<div class="panel-loading loader-wrapper">
          <div class="loader-container">
            <div class="ball-pulse-rise loader-danger">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>`)
	}
	removeLoadingPanel(){
		$(this.wrapper).find('.panel-loading').remove()
	}
	editAction(){
		let actionBtn = $(this.wrapper).find('.heading-elements a[data-action=edit]')
		actionBtn.on('click', ()=>{
			//append new form
			//change tag to input fields
			$(this.wrapper).wrap('<form id="'+this.formid+'"></form>')
			$(this.wrapper).children().find('span.replace-input').each((index, item)=>{
				let name = $(item).attr('data-name')
				let value = $(item).attr('data-original-value')
				let type = $(item).attr('data-type')
				let className = $(item).attr('data-class')
				let id = $(item).attr('data-id')
				let	rows = $(item).attr('data-rows')
				let cols = $(item).attr('data-cols')

				let selected = $(item).attr('data-selected')

				if( type === 'select'){
					let firstOpt = `<option value="">Select ${name}</option>`
					let opts = firstOpt
					let listValue = value.split(',')
					if(listValue)
						[...listValue].map((item, index)=>{
							let itemTmp = item.split('=')
							if(itemTmp)
								opts +=`<option ${ selected && selected == itemTmp[0] ? 'selected="selected"' : '' } value="${itemTmp[0] ? itemTmp[0] : ''}">${itemTmp[1] ? itemTmp[1] : ''}</option>`
						})
					$(item).replaceWith(`<select name="${name ? name : ''}" class="${className ? className : ''}">${opts}<select>`)
				}

				if( type === 'datepicker' ){
					$(item).replaceWith(`<input type="${type ? type : ''}" name="${name ? name : ''}" value="${value ? value : ''}" class="${className ? className : ''}" id="${id ? id : ''}" />`)
					$('#'+id).datepicker({
						format: 'dd-mm-yyyy',
					})
				}

				if( type ==='text' || type === 'email' || type === 'password' )
					$(item).replaceWith(`<input type="${type ? type : ''}" name="${name ? name : ''}" value="${value ? value : ''}" class="${className ? className : ''}" id="${id ? id : ''}" />`)
				if( type ==='textarea' )
					$(item).replaceWith(`<textarea class="${className ? className : ''}" name="${name ? name : ''}" id="${id ? id : ''}" rows="${rows ? rows : ''}" cols="${cols ? cols : ''}">${value ? value : ''}</textarea>`)
			})

		
			if(this.appendControl === 0){
				this.appendControl+=1
				$(this.wrapper).append(`<div class="card-footer text-right">
				<button data-placement="top" data-toggle="tooltip" data-original-title="Update your profile informations" type="button" data-control="submit" class="btn btn-sm round btn-primary">Update</button>
				<button data-placement="top" data-toggle="tooltip" data-original-title="Cancel update informations" type="button" data-control="cancel" class="btn btn-sm round btn-danger">Cancel</button>
				</div>`)
			}
			//call create form request
			this.createFormRequest()
		})
	}
	cancelAction(){

	}
}

export default EditForm