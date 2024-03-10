/**
 * Treeview (jquery)
 */

'use strict';

$(function () {
  var theme = $('html').hasClass('light-style') ? 'default' : 'default-dark',
    basicTree = $('#jstree-basic'),
    customIconsTree = $('#jstree-custom-icons'),
    contextMenu = $('#jstree-context-menu'),
    dragDrop = $('#jstree-drag-drop'),
    checkboxTree = $('#jstree-checkbox'),
    ajaxTree = $('#jstree-ajax');

  // Basic
  // --------------------------------------------------------------------
  if (basicTree.length) {
    basicTree.jstree({
      core: {
        themes: {
          name: theme
        }
      }
    });
  }

  // Custom Icons
  // --------------------------------------------------------------------
  if (customIconsTree.length) {
    customIconsTree.jstree({
      core: {
        themes: {
          name: theme
        },
        data: [
          {
            text: 'css',
            children: [
              {
                text: 'app.css',
                type: 'css'
              },
              {
                text: 'style.css',
                type: 'css'
              }
            ]
          },
          {
            text: 'img',
            state: {
              opened: true
            },
            children: [
              {
                text: 'bg.jpg',
                type: 'img'
              },
              {
                text: 'logo.png',
                type: 'img'
              },
              {
                text: 'avatar.png',
                type: 'img'
              }
            ]
          },
          {
            text: 'js',
            state: {
              opened: true
            },
            children: [
              {
                text: 'jquery.js',
                type: 'js'
              },
              {
                text: 'app.js',
                type: 'js'
              }
            ]
          },
          {
            text: 'index.html',
            type: 'html'
          },
          {
            text: 'page-one.html',
            type: 'html'
          },
          {
            text: 'page-two.html',
            type: 'html'
          }
        ]
      },
      plugins: ['types'],
      types: {
        default: {
          icon: 'bx bx-folder'
        },
        html: {
          icon: 'bx bxl-html5 text-danger'
        },
        css: {
          icon: 'bx bxl-css3 text-info'
        },
        img: {
          icon: 'bx bx-image text-success'
        },
        js: {
          icon: 'bx bxl-nodejs text-warning'
        }
      }
    });
  }

  // Context Menu
  // --------------------------------------------------------------------
  if (contextMenu.length) {
    contextMenu.jstree({
      core: {
        themes: {
          name: theme
        },
        check_callback: true,
        data: [
          {
            text: 'میرجاوه',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا1',
                type: 'xray'
              }
              ,
              {
                text: 'ناک تک1',
                type: 'xray'
              }
            ]
          },
          {
            text: 'بازرگان',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
              ,
              {
                text: 'ناک تک1',
                type: 'xray'
              }
            ]
          },
          {
            text: 'لطف‌آباد',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'جلفا',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },       
          {
            text: 'پرویزخان',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'چابهار',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'شهید رجایی بندرعباس',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'شهریار تهران',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'پیرانشهر',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'سرخس',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'کوهک',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'گیله سردشت',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'یزدان',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'شوشمی',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'میلک',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'باجیگیران',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'دوکوهه',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'میل',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'پیشین',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'سیف سقز',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'رازی',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
          {
            text: 'بیله سوار',
            
            children: [
              {
                text: 'سرور',
                type: 'db'
              },
              {
                text: 'صاپا2',
                type: 'xray'
              }
            ]
          },
        ]
      },
      plugins: ['types', 'contextmenu'],
      types: {
        default: {
          icon: 'bx bx-folder'
        },
        html: {
          icon: 'bx bxl-html5 text-danger'
        },
        css: {
          icon: 'bx bxl-css3 text-info'
        },
        img: {
          icon: 'bx bx-image text-success'
        },
        js: {
          icon: 'bx bxl-nodejs text-warning'
        },
        db:{
            icon:'bx bx-server'
        },
        xray:{
            icon:'bx bxs-inbox'
        },

      },
      contextmenu: {
        items: function(n) {
            var items = $.jstree.defaults.contextmenu.items();
            items.create.label = 'ایجاد';
            items.rename.label = 'تغییر نام';
            items.remove.label = 'حذف';
            items.ccp.label = 'ویرایش';
            items.ccp.submenu.cut.label = 'برش';
            items.ccp.submenu.copy.label = 'کپی';
            items.ccp.submenu.paste.label = 'چسباندن';
            return items;
        }
      }
    });
  }

  // Drag Drop
  // --------------------------------------------------------------------
  if (dragDrop.length) {
    dragDrop.jstree({
      core: {
        themes: {
          name: theme
        },
        check_callback: true,
        data: [
          {
            text: 'css',
            children: [
              {
                text: 'app.css',
                type: 'css'
              },
              {
                text: 'style.css',
                type: 'css'
              }
            ]
          },
          {
            text: 'img',
            state: {
              opened: true
            },
            children: [
              {
                text: 'bg.jpg',
                type: 'img'
              },
              {
                text: 'logo.png',
                type: 'img'
              },
              {
                text: 'avatar.png',
                type: 'img'
              }
            ]
          },
          {
            text: 'js',
            state: {
              opened: true
            },
            children: [
              {
                text: 'jquery.js',
                type: 'js'
              },
              {
                text: 'app.js',
                type: 'js'
              }
            ]
          },
          {
            text: 'index.html',
            type: 'html'
          },
          {
            text: 'page-one.html',
            type: 'html'
          },
          {
            text: 'page-two.html',
            type: 'html'
          }
        ]
      },
      plugins: ['types', 'dnd'],
      types: {
        default: {
          icon: 'bx bx-folder'
        },
        html: {
          icon: 'bx bxl-html5 text-danger'
        },
        css: {
          icon: 'bx bxl-css3 text-info'
        },
        img: {
          icon: 'bx bx-image text-success'
        },
        js: {
          icon: 'bx bxl-nodejs text-warning'
        }
      }
    });
  }

  // Checkbox
  // --------------------------------------------------------------------
  if (checkboxTree.length) {
    checkboxTree.jstree({
      core: {
        themes: {
          name: theme
        },
        data: [
          {
            text: 'css',
            children: [
              {
                text: 'app.css',
                type: 'css'
              },
              {
                text: 'style.css',
                type: 'css'
              }
            ]
          },
          {
            text: 'img',
            state: {
              opened: true
            },
            children: [
              {
                text: 'bg.jpg',
                type: 'img'
              },
              {
                text: 'logo.png',
                type: 'img'
              },
              {
                text: 'avatar.png',
                type: 'img'
              }
            ]
          },
          {
            text: 'js',
            state: {
              opened: true
            },
            children: [
              {
                text: 'jquery.js',
                type: 'js'
              },
              {
                text: 'app.js',
                type: 'js'
              }
            ]
          },
          {
            text: 'index.html',
            type: 'html'
          },
          {
            text: 'page-one.html',
            type: 'html'
          },
          {
            text: 'page-two.html',
            type: 'html'
          }
        ]
      },
      plugins: ['types', 'checkbox', 'wholerow'],
      types: {
        default: {
          icon: 'bx bx-folder'
        },
        html: {
          icon: 'bx bxl-html5 text-danger'
        },
        css: {
          icon: 'bx bxl-css3 text-info'
        },
        img: {
          icon: 'bx bx-image text-success'
        },
        js: {
          icon: 'bx bxl-nodejs text-warning'
        }
      }
    });
  }

  // Ajax Example
  // --------------------------------------------------------------------
  if (ajaxTree.length) {
    ajaxTree.jstree({
      core: {
        themes: {
          name: theme
        },
        data: {
          url: assetsPath + 'json/jstree-data.json',
          dataType: 'json',
          data: function (node) {
            return {
              id: node.id
            };
          }
        }
      },
      plugins: ['types', 'state'],
      types: {
        default: {
          icon: 'bx bx-folder'
        },
        html: {
          icon: 'bx bxl-html5 text-danger'
        },
        css: {
          icon: 'bx bxl-css3 text-info'
        },
        img: {
          icon: 'bx bx-image text-success'
        },
        js: {
          icon: 'bx bxl-nodejs text-warning'
        }
      }
    });
  }
});
