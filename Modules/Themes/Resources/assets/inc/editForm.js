'use strict'
class EditForm{
	constructor(wrapper=null, formid=null){
		this.wrapper = wrapper
		this.formid = formid
		this.appendControl = false
		this.mode = false
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
			if(this.mode === false){
                $(this.wrapper).wrap('<form id="'+this.formid+'"></form>')
			}


			$(this.wrapper).children().find('span.replace-input').each((index, item)=>{
				let name = $(item).attr('data-name')
				let value = $(item).attr('data-original-value')
				let type = $(item).attr('data-type')
				let className = $(item).attr('data-class')
				let id = $(item).attr('data-id')
				let	rows = $(item).attr('data-rows')
				let cols = $(item).attr('data-cols')

				let selected = $(item).attr('data-selected')
				let selectedText  = $(item).attr('data-selected-text')

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
					$(item).replaceWith(`<span class="replace-text" data-name="${name ? name : ''}" data-original-value="${value ? value : ''}" data-class="${className ? className : ''}" data-id="${id ? id : ''}" data-selected-text="${selectedText ? selectedText : '' }" data-type="${type ? type : ''}" data-selected="${selected ? selected : ''}"><div class="wp-input"><select name="${name ? name : ''}" class="${className ? className : ''}">${opts}</select><div class="help-block"></div></div></span>`)
				}

				if( type === 'datepicker' ){
					$(item).replaceWith(`<span class="replace-text" data-name="${name ? name : ''}" data-original-value="${value ? value : ''}" data-type="${type ? type : ''}" data-class="${className ? className : ''}" data-id="${id ? id : ''}"><div class="wp-input"><input type="${type ? type : ''}" name="${name ? name : ''}" value="${value ? value : ''}" class="${className ? className : ''}" id="${id ? id : ''}" /><div class="help-block"></div></div></span>`)
					$('#'+id).datepicker({
						format: 'dd-mm-yyyy',
					})
				}

				if( type ==='text' || type === 'email' || type === 'password' )
					$(item).replaceWith(`<span class="replace-text" data-name="${name ? name : ''}" data-original-value="${value ? value : ''}" data-type="${type ? type : ''}" data-class="${className ? className : ''}" data-id="${id ? id : ''}"><div class="wp-input"><input type="${type ? type : ''}" name="${name ? name : ''}" value="${value ? value : ''}" class="${className ? className : ''}" id="${id ? id : ''}" /><div class="help-block"></div></div></span>`)
				if( type ==='textarea' )
					$(item).replaceWith(`<span class="replace-text" data-name="${name ? name : ''}" data-original-value="${value ? value : ''}" data-class="${className ? className : ''}" data-id="${id ? id : ''}" data-rows="${rows ? rows : ''}" data-cols="${cols ? cols : ''}" data-type="${type ? type : ''}"><div class="wp-input"><textarea class="${className ? className : ''}" name="${name ? name : ''}" id="${id ? id : ''}" rows="${rows ? rows : ''}" cols="${cols ? cols : ''}">${value ? value : ''}</textarea><div class="help-block"></div></div></span>`)
			})

		
			if(this.mode === false){
				$(this.wrapper).append(`<div class="card-footer text-right">
				<button data-placement="top" data-toggle="tooltip" data-original-title="Update your profile informations" type="button" data-control="submit" class="btn btn-sm round btn-primary">Update</button>
				<button data-placement="top" data-toggle="tooltip" data-original-title="Cancel update informations" type="button" data-control="cancel" class="btn btn-sm round btn-danger">Cancel</button>
				</div>`)
			}
			//call create form request
			if(this.mode === false){
                this.mode = true
                this.createFormRequest()
			}


            let wpAct = $(this.wrapper).find('.heading-elements ul')
			let cancelBtn = '<li><a data-action="cancel"><i class="ft-x"></i></a></li>'
			actionBtn.remove()
			wpAct.append(cancelBtn)
			this.cancelAction()
		})
	}
	cancelAction(){
        let cancelBtn = $(this.wrapper).find('.heading-elements a[data-action=cancel]')
		cancelBtn.on('click', ()=>{
			this.mode = false
            $(this.wrapper).unwrap('form')//unwrap form
            $(this.wrapper).children('.card-footer').remove()//remove action footer
            $(this.wrapper).children().find('span.replace-text').each((index, item)=>{
                let name = $(item).attr('data-name')
                let value = $(item).attr('data-original-value')
                let type = $(item).attr('data-type')
                let className = $(item).attr('data-class')
                let id = $(item).attr('data-id')
                let	rows = $(item).attr('data-rows')
                let cols = $(item).attr('data-cols')

                let selected = $(item).attr('data-selected')
                let selectedText  = $(item).attr('data-selected-text')

                if( type === 'select'){
                	$(item).replaceWith(`<span class="replace-input" data-type="${type}" data-name="${name ? name : ''}" data-selected="${selected ? selected : ''}" data-class="${className ? className : ''}" data-original-value="${value? value: ''}" data-selected-text="${selectedText ? selectedText : ''}" data-id="${ id ? id: ''}">${selectedText ? selectedText : ''}</span>`)
				}
                if( type === 'datepicker' ){
                    $(item).replaceWith(`<span class="replace-input" data-type="${type}" data-name="${name ? name : ''}" data-class="${className ? className : ''}" data-original-value="${value? value: ''}" data-id="${ id ? id : '' }">${value ? value : ''}</span>`)
				}
                if( type ==='text' || type === 'email' || type === 'password' ){
                    $(item).replaceWith(`<span class="replace-input" data-type="${type}" data-name="${name ? name : ''}" data-class="${className ? className : ''}" data-original-value="${value? value: ''}" data-id="${ id ? id : '' }">${value ? value : ''}</span>`)
				}
                if( type ==='textarea' ){
                    $(item).replaceWith(`<span class="replace-input" data-type="${type}" data-name="${name ? name : ''}" data-class="${className ? className : ''}" data-original-value="${value? value: ''}" data-id="${ id ? id : '' }" data-cols="${ cols ? cols : '' }" data-rows="${ rows ? rows : '' }">${value ? value : ''}</span>`)
				}

			})

            let wpAct = $(this.wrapper).find('.heading-elements ul')
            let editBtn = '<li><a data-action="edit"><i class="ft-edit-2"></i></a></li>'
            cancelBtn.remove()
            wpAct.append(editBtn)
			this.editAction()
		})
	}
	cancelEdit(){
        let cancelBtn = $(this.wrapper).find('.heading-elements a[data-action=cancel]')
		cancelBtn.trigger('click')
	}
	cancelEditAction(){}
}

export default EditForm