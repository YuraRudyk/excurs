RTE {
    classes >
    classesAnchor >

    # Add your classes here
    classes {
        text-left.name    = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifyleft
        text-center.name  = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifycenter
        text-right.name   = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifyright
        text-justify.name = LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:justify
    }

    default {
        # Convert all DIV to P tags
        proc.preserveDIVSections = 0

        contentCSS = EXT:sem_content/Resources/Public/Styles/rte.css

        # Allow span tag which doesn't contain any attributes
        proc.entryHTMLparser_db.tags.span.rmTagIfNoAttrib = 0

        # Do not show classes not associated with any tag in the contentCSS style sheet
        showTagFreeClasses = 0

        # Remove classes
        removeTags := removeFromList(u)

        # "Clean" text pasted from external sources, presumably from Microsoft Word
        enableWordClean            = 1
        enableWordClean.HTMLparser = 1

        proc {
            # Allow tags to be processed
            allowTags := addToList(hr, address, p, br, strong, b)

            # Allow tags outside <div> and <p> tags
            allowTagsOutside := addToList(ul, table, div, a, br, hr, address, p, strong, b)

            # Allow classes
            allowedClasses = text-left, text-center, text-right, text-justify

            entryHTMLparser_db {
                tags {
                    # Do not remove span tags when it does not have any attributes
                    span.rmTagIfNoAttrib = 0
                }

                # Allow processing of <u> tag to database
                removeTags := removeFromList(u)
            }
        }

        buttons {
            left.useClass        = text-left
            center.useClass      = text-center
            right.useClass       = text-right
            justifyfull.useClass = text-justify

            # Format block selector configuration
            formatblock.addItems    := addToList(address)
            formatblock.removeItems := addToList(article, aside, blockquote, footer, header, nav, section)

            # Block tags configuration
            blockstyle {
                # Do not show the classes which are not associated with tag name
                showTagFreeClasses = 0

                tags {
                    h1.allowedClasses    = text-left, text-center, text-right, text-justify
                    h2.allowedClasses    = text-left, text-center, text-right, text-justify
                    h3.allowedClasses    = text-left, text-center, text-right, text-justify
                    h4.allowedClasses    = text-left, text-center, text-right, text-justify
                    h5.allowedClasses    = text-left, text-center, text-right, text-justify
                    h6.allowedClasses    = text-left, text-center, text-right, text-justify
                    div.allowedClasses   = text-left, text-center, text-right, text-justify
                    table.allowedClasses = text-left, text-center, text-right, text-justify
                    td.allowedClasses    = text-left, text-center, text-right, text-justify
                    p.allowedClasses     = text-left, text-center, text-right, text-justify
                    ul.allowedClasses    = text-left, text-center, text-right, text-justify
                    ol.allowedClasses    = text-left, text-center, text-right, text-justify
                }
            }

            textstyle {
                showTagFreeClasses = 0

                tags {
                    span.allowedClasses = 
                }
            }

            # Configuration of links
            link {
                properties.class.allowedClasses (

                )

                page.properties.class.default >
                url.properties.class.default  >
                file.properties.class.default >
                mail.properties.class.default >
            }

            # Images properties
            image.properties.class {
                allowedClasses := addToList(img-responsive)
                default         = img-responsive
            }
        }

        showButtons (
            blockstylelabel, blockstyle, textstylelabel, textstyle, formatblock, bold, italic, underline,
            left, center, right, justifyfull, orderedlist, unorderedlist, textindicator, insertcharacter,
            insertsofthyphen, link, unlink, findreplace, chMode, pastetoggle, removeformat, undo, redo
        )

        # Do not convert <br> to <p>&nbsp;</p>
        dontConvBRtoParagraph = 1

        # Do not fetch images from external URLs
        dontFetchExtPictures  = 1
    }
}
