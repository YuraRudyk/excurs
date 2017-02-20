config.tx_extbase.persistence.classes.Rudyk\SemExContent\Domain\Model\Row {
    mapping {
        tableName  = tt_content
        columns {
            tx_semexcontent_headcontents.mapOnProperty = headcontents
            tx_semexcontent_footcontents.mapOnProperty = footcontents
            tx_semexcontent_ordercontents.mapOnProperty = ordercontents
            tx_semexcontent_order.mapOnProperty = orderItems
        }
    }
}