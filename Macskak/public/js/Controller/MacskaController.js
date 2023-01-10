class MacskaController {    constructor() {
    const pm = new publicModel();
    $(window).on('load',()=>{
        pm.getData('/macskak')
    });

}}
export default MacskaController;
