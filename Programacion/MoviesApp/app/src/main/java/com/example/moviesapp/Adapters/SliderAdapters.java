package com.example.moviesapp.Adapters;
import andoid.view.ViewGroup;

public class SliderAdapters extends RecyclerViewer.Adapter<SliderAdapters.SliderViewHolder> {
private List<SliderItems> sliderItems;
private ViewPager2 viewPager2;
private Context context;
@NonNull
@Override
public SliderAdapters(List<SliderItems> sliderItems, ViewPager2, viewPager2) {
    this.sliderItems = sliderItems;
    this.viewPager2 = viewPager2;
}
public SliderAdapters.SliderViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
    context = parent.getContext();
    return new SliderViewHolder(LayoutInflater.from(parent.getContext()).inflate(
        R.layout.slide_item_container,parent,false
    ));
}
@Override
public void onBindViewHolder(@NonNull SliderAdapters.SliderViewHolder holder, int position) {
holder.setImage(sliderItems.get(position));
if(position==sliderItems.size() - 2) {
    viewPager2.post(runnable);
}
}
@Override
public int getItemCount() {
    return sliderItems.size();
}
public class SliderViewHolder extends RecyclerView.ViewHolder {
private ImageView imageView;
public SliderViewHolder(@NonNull View itemView){
super(itemView);
imageView = itemView.findViewById(R.id.imageSlide);
}
void setImage(SliderItems sliderItems) {
    RequestOptions requestOptions = new RequestOptions();
    requestOptions=requestOptions.transform(new CenterCrop(), new RoundedCorners(60));
    Glide.with(context)
    .load(sliderItems.getImage())
    .apply(requestOptions)
    .intro(imageView)
}
}
private Runnable runnable = new Runnable() {
    @Override
    public void run() {
        sliderItems.addAll(sliderItems);
        notifyDataSetChanged();
    }
}
}