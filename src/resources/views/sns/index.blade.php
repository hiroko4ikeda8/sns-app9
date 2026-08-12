<x-app-layout>
    <div class="container py-4">
        <!-- 3カラムレイアウト（スマホ: 1列 / PC: 3-6-3分割） -->
        <div class="row g-4">
            
            <!-- 【左サイドバー】 PC: 3列分 -->
            <div class="col-12 col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">メニュー</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-decoration-none fw-bold text-primary">🏠 ホーム</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">👤 プロフィール</a></li>
                            <li><a href="#" class="text-decoration-none text-secondary">⚙️ 設定</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 【中央メイン】 PC: 6列分（投稿フォーム ＆ タイムライン） -->
            <div class="col-12 col-md-6">
                <!-- ① 投稿フォーム -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">いまどうしてる？</h5>
                        <textarea class="form-control mb-3" rows="3" placeholder="ここに投稿内容を入力..."></textarea>
                        <div class="text-end">
                            <button class="btn btn-primary fw-bold px-4">投稿する</button>
                        </div>
                    </div>
                </div>

                <!-- ② 投稿カード（ダミー表示） -->
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">
                                👤
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">テストユーザー</h6>
                                <small class="text-muted">1時間前</small>
                            </div>
                        </div>
                        <p class="card-text text-dark">ここに投稿データが表示されます。Bootstrapのコンポーネントで描画しています！</p>
                    </div>
                </div>
            </div>

            <!-- 【右サイドバー】 PC: 3列分 -->
            <div class="col-12 col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-2">おすすめ</h5>
                        <p class="card-text text-muted small mb-0">ここにトレンドやおすすめユーザーを配置できます。</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>