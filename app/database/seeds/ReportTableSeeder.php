<?php


class ReportTableSeeder extends Seeder
{
    public function run()
    {
        Report::create(
        array(
                'reportType' => 1,
                'reportName' => 'Fatal Accident between two 4-seaters',
                'reportedBy' => 'John Tan',
                'contactNo'  => 98597484,
                'location'   => 'Bukit Batok Ave 2',
                'status'     => 1,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Minor Accident between two 7-seaters',
                'reportedBy' => 'Mary Tan',
                'contactNo'  => 98598984,
                'location'   => 'Boon Lay st 24',
                'status'     => 2,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Fatal Accident between two 4-seaters',
                'reportedBy' => 'John Tan',
                'contactNo'  => 98597484,
                'location'   => 'HillView Ave',
                'status'     => 1,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Minor Accident between two 4-seaters',
                'reportedBy' => 'Mac Tan',
                'contactNo'  => 98337484,
                'location'   => 'Blk 502 Seragoon S650330',
                'status'     => 1,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Minor Accident between two buses',
                'reportedBy' => 'Sophia Tan',
                'contactNo'  => 98598114,
                'location'   => 'Boon Lay st 11',
                'status'     => 2,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Fatal Accident between two motocyclist',
                'reportedBy' => 'William Goh',
                'contactNo'  => 98197484,
                'location'   => 'Depot Road S542000',
                'status'     => 1,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 2,
                'reportName' => 'Multiple dengue outbreaks in the HDB block 706',
                'reportedBy' => 'KK Hospital',
                'contactNo'  => 65668555,
                'location'   => 'Block 706 HDB Clementi West',
                'status'     => 2,
                'assignedTo' => 'Alliance Pest Management Pte Ltd'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Accident along the road between cyclist and van',
                'reportedBy' => 'Philip Goh',
                'contactNo'  => 81598984,
                'location'   => 'Bukit Batok West Ave 3',
                'status'     => 2,
                'assignedTo' => 'TP Dept'
            )
        );
        Report::create(
            array(
                'reportType' => 2,
                'reportName' => 'Multiple dengue outbreaks in the HDB block 601',
                'reportedBy' => 'KK Hospital',
                'contactNo'  => 65668555,
                'location'   => 'Block 601 HDB Clementi West',
                'status'     => 2,
                'assignedTo' => 'Alliance Pest Management Pte Ltd'
            )
        );
        Report::create(
            array(
                'reportType' => 1,
                'reportName' => 'Multiple dengue outbreaks in the HDB block 801',
                'reportedBy' => 'KK Hospital',
                'contactNo'  => 65668555,
                'location'   => 'Block 221 Bukit Batok Central',
                'status'     => 3,
                'assignedTo' => 'Alliance Pest Management Pte Ltd'
            )
        );
        Report::create(
            array(
                'reportType' => 2,
                'reportName' => 'Multiple dengue outbreaks in the HDB block 506',
                'reportedBy' => 'KK Hospital',
                'contactNo'  => 65668555,
                'location'   => 'Block 506 Bishan Ave 5',
                'status'     => 1,
                'assignedTo' => 'Alliance Pest Management Pte Ltd'
            )
        );
        Report::create(
            array(
                'reportType' => 2,
                'reportName' => 'Multiple dengue outbreaks in the HDB block 506',
                'reportedBy' => 'KK Hospital',
                'contactNo'  => 65668555,
                'location'   => 'Block 776 Bishan Ave 3',
                'status'     => 3,
                'assignedTo' => 'Alliance Pest Management Pte Ltd'
            )
        );

    }
}
