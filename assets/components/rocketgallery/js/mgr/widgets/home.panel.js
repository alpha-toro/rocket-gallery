RocketGallery.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('rocketgallery')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-panel'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,activeItem: 0
            ,hideMode: 'offsets'
            ,items: [
                {
                    // title: _('rocketgallery.sets')
                    items: [
                        // {
                        //     html: '<p>'+_('rocketgallery.set_intro_msg')+'</p>'
                        //     ,border: false
                        //     ,bodyCssClass: 'panel-desc'
                        // }
                        {
                            xtype: 'rocketgallery-grid-sets'
                            ,preventRender: true
                            ,cls: 'main-wrapper'
                        }
                    ]
                }
            ]
        }]
    });
    RocketGallery.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(RocketGallery.panel.Home,MODx.Panel);
Ext.reg('rocketgallery-panel-home',RocketGallery.panel.Home);
