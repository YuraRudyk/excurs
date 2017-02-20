mod.wizards.newContentElement.wizardItems.special {
    elements {
        semexcontent_headcontent {
            title          = semexcontent_headcontent
            description    = semexcontent_headcontent
            iconIdentifier = semexcontent-headcontent

            tt_content_defValues {
                CType = semexcontent_headcontent
            }
        },

        semexcontent_footcontent {
            title          = semexcontent_footcontent
            description    = semexcontent_footcontent
            iconIdentifier = semexcontent-footcontent

            tt_content_defValues {
                CType = semexcontent_footcontent
            }
        },

        semexcontent_ordercontent {
            title          = semexcontent_ordercontent
            description    = semexcontent_ordercontent
            iconIdentifier = semexcontent-ordercontent

            tt_content_defValues {
                CType = semexcontent_ordercontent
            }
        }
    }

    show := addToList(semexcontent_headcontent, semexcontent_footcontent, semexcontent_ordercontent)
}