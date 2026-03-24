<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\DiaryEntry;

class DiaryController extends Controller {
    
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /auth/login');
            exit;
        }
    }

    public function index() {
        $diaryModel = new DiaryEntry();
        $entries = $diaryModel->getAllByUserId($_SESSION['user_id']);
        
        $this->render('diary/index', [
            'title' => 'Мій Щоденник',
            'entries' => $entries
        ]);
    }

    public function create() {
        $this->render('diary/create', ['title' => 'Новий запис']);
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $diaryModel = new DiaryEntry();
            
            if ($diaryModel->create($_POST)) {
                header('Location: /diary/index'); 
                exit;
            }
        }
    }

    public function edit($id) {
        $diaryModel = new DiaryEntry();
        $entry = $diaryModel->getById($id, $_SESSION['user_id']);

        if (!$entry) {
            die("Запис не знайдено або у вас немає прав на його редагування.");
        }

        $this->render('diary/edit', ['title' => 'Редагувати запис', 'entry' => $entry]);
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $diaryModel = new DiaryEntry();
            if ($diaryModel->update($id, $_SESSION['user_id'], $_POST)) {
                header('Location: /diary/index');
                exit;
            }
        }
    }
    
    public function destroy($id) {
        $diaryModel = new DiaryEntry();
        if ($diaryModel->delete($id, $_SESSION['user_id'])) {
            header('Location: /diary/index');
            exit;
        }
    }
}