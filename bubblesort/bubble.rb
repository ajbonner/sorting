#!/usr/bin/env ruby

def bubblesort(ints, numints)
  i = numints
  while i >= 0
    i-= 1
    swapped = false
    for j in 0..i
      if ints[j] > ints[j+1]
        swapped = true
        tmp = ints[j]
        ints[j] = ints[j+1]
        ints[j+1] = tmp
      end
    end
    if !swapped
      return
    end
  end
end

numints = 5000
ints = Array.new

for i in 0..numints
  ints[i] = rand(100000);
end

puts "Sorting #{numints} integers"
start = Time.now
bubblesort ints, numints
finish = Time.now
timetaken = "%.4f" % (finish - start).to_f 
puts "Sort took #{"%.4f" % (finish - start).to_f} secs" 
