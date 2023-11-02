package com.example.moviesapp;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;

public class MainActivity extends AppCompatActivity {
private RecyclerView.Adapter adapterNewMovies, AdapterUpComing, adapterCategory;
private RecyclerView recyclerViewBestMovies, recyclerViewUpComming, recyclerviewCategory;
private RequestQueue mRequestQueue;
private StringRequest mStringRequest, mStringRequest2, mStringRequest3;
private ProgressBar loading1, loading2, loading3;
private ViewPager2 viewPager2;
private Handler slideHandler = new Handler();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        initView();
        banners();
    }
    private void banners() {
        List<SliderItems> sliderItems = new ArrayList<>();
        sliderItems.add(new SliderItems(R.drawable.wide1));
        sliderItems.add(new SliderItems(R.drawable.wide2));
        sliderItems.add(new SliderItems(R.drawable.wide3));

        viewPager2.setAdapter(new SliderAdapters(sliderItems, viewPager2));
        viewPager2.setClipToPadding(false);
        viewPager2.setSitChildren(false);
        viewPager2.setOffscreenPageLimit(3);
        viewPager2.getOfChildAt(0).setOverScrollMode(RecyclerView.OVER_SCROLL_NEVER);

        CompositePageTransformer compositePageTransformer = new CompositePageTransformer();
        compositePageTransformer.addTransformer(new MarginPageTransformer(40));
        compositePageTransformer.addTransformer(new ViewPager2.PageTransformer() {
            @Override
            public void transformPage(@NonNull View page, float position) {
                float r = Math.abs(position);
                page.setScaleY(0.85f+r*0.15f);
            }
        });
        viewPager2.setPageTransformer(compositePageTransformer);
        viewPager2.setCurrentItem(1);
        viewPager2.registerOnPageChangeCallback(new ViewPager2.OnPageChangeCallback(){

        @Override
        public void onPageSelected(int position) {
            super.onPageSelected(position);
            slideHandler.removeCallbacks(sliderRunnable);
        }

        });
    }
    private Runnable sliderRunnable = new Runnable() {
        public void run() {
            viewPager2.setCurrentItem(viewPager2.getCurrentItem()+1);
        }
    }
    @Override
    protected void onPause() {
        super.onResume();
        slideHandler.postDelayed(sliderRunnable, 2000);
    }
    private void InitView() {
        viewPager2 = findViewById(R.id.viewpagerSlider);
        recyclerViewBestMovies = findViewById(R.id.view1);
        recyclerViewBestMovies.setLayoutManager(new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false));
        recyclerViewUpcomming = findViewById(R.id.view2);
        recyclerViewUpcomming.setLayoutManager(new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false));
        recyclerViewCategory = findViewById(R.id.view3);
        recyclerViewCategory.setLayoutManager(new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false));
        loading1=findViewById(R.id.progressBar1);
        loading2=findViewById(R.id.progressBar2);
        loading3=findViewById(R.id.progressBar3);
        
    }
}