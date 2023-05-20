document.querySelectorAll('.file-upload').forEach(el => {
    const textEl = el.querySelector('.file-upload-text') as HTMLInputElement
    const inputEL = el.querySelector('.file-upload-input') as HTMLInputElement

    inputEL?.addEventListener('change', ev => {
        const el = ev.target as any
        if (el.files.length) {
            const files = Array.from(el.files)
            console.log(files)

            textEl.innerText = files.map((file: any) => file.name).join(', ')
        } else {
            textEl.innerText = 'Drag & Drop your file or Browse'
        }
    })
})
