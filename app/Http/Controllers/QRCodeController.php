<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrkyUtils;

class QRCodeController extends Controller
{
    public function show() {
        return QrkyUtils::get_qrky_code();
    }

    public function create() {
        return view('create', [
            'qrc' => QrkyUtils::get_static_code(true, 'Preview')
        ]);
    }

    /**
     * Manage ungrouped QRCs view.
     */
    public function manage_qrcs_ug() {

        return view('manage_qrc_ug', [
            'qrcs' => [
                [
                    'name' => 'Guidance Feedback Form', 
                    'status' => 'Deployed',
                    'id' => QrkyUtils::get_hash(), 
                    'type' => 'Static', 
                    'loc' => '11F, RM1106', 
                    'desc' => 'Allows routine interviewees to instantly access the guidance feedback form after their interview.',
                    'preview' => QrkyUtils::get_static_code(true, 'ewew31')
                ],
                [
                    'name' => 'Jobert',
                    'status' => 'Not Deployed',
                    'id' => 'fkeose', 
                    'type' => 'Static', 
                    'loc' => '11F, RM1106', 
                    'desc' => 'Oofsie',
                    'preview' => QrkyUtils::get_static_code(true, 'fkeose')
                ],
                [
                    'name' => 'Mekomeko',
                    'status' => 'Deployed',
                    'id' => 'wieuad', 
                    'type' => 'Static', 
                    'loc' => '11F, RM1106', 
                    'desc' => 'Oofsie',
                    'preview' => QrkyUtils::get_static_code(true, 'wieuad')
                ]
            ]
        ]);
    }

    /**
     * Manage grouped QRCs view.
     */
    public function manage_qrcs_g(Request $request) {
        $id = $request->id;

        return view('manage_qrc_g', [
            'qrcs' => []
        ]);
    }

    public function manage_grps() {
        return view('manage_grp', [
            'grps' => [
                [
                    'name' => 'Guidance Office',
                    'id' => '1',
                    'desc' => 'A group dedicated for guidance office faculty members.'
                ]
            ]
        ]);
    }

    /**
     * Generates a QR code preview.
     */
    public function preview(Request $request) {
        $type = $request->input('cType');
        $content = $request->input('c');
        $qrc = NULL;

        switch($type) {

            // Static
            case 0:
                $qrc = QrkyUtils::get_static_code(true, $content);
                break;

            // Dynamic
            case 1:
                $qrc = QrkyUtils::get_dynamic_code(true, $content);
                break;

            // Portal
            case 2:
                $qrc = QrkyUtils::get_static_code(true, $content);
                break;
        }
        
        
        return base64_encode($qrc);
    }
}
